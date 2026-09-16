<?php

namespace App\Modules\Base\Integration\SimpleHttp;

use Illuminate\Contracts\Foundation\Application;

/**
 * @package Base
 * Extend this class, and it will search for Requests under Requests directory of its namespace
 */
abstract class SimpleHttpClient
{
    /** @var SimpleHttpResponse $responseData */
    protected $responseData;

    /** @var string $methodNamespace */
    protected $methodNamespace;

    /** @var SimpleHttpRequest $request */
    protected $request;

    /**
     * SimpleHttpClient constructor.
     */
    public function __construct()
    {
        $currentClass = new \ReflectionClass(get_class($this));
        $this->methodNamespace = $currentClass->getNamespaceName() . "\\Requests\\";
    }

    /**
     * @param $name
     * @param $arguments
     * @return false|mixed
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        } else {
            return call_user_func_array([$this, '__doRequest'], [$name, $arguments]);
        }
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return SimpleHttpResponse|Application|mixed
     * @throws \ReflectionException
     */
    public function __doRequest(string $name, array $arguments)
    {
        /** @var SimpleHttpRequest request */
        $this->request = (new \ReflectionClass($this->methodNamespace . $name))->newInstanceArgs($arguments);
        $curl = curl_init($this->request->getEndpoint());
        $options = [
            CURLOPT_SSL_VERIFYHOST  => 0,
            CURLOPT_SSL_VERIFYPEER  => 0,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_HEADER          => true,
            CURLOPT_ENCODING        => '',
            CURLOPT_MAXREDIRS       => 10,
            CURLOPT_TIMEOUT         => 90,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_CUSTOMREQUEST   => $this->request->getHttpMethod(),
            CURLOPT_HTTPHEADER      => $this->request->getHeaders(),
            CURLOPT_USERAGENT       => $this->request->getUserAgent()
        ];
        if ($this->request->getCookies()) {
            $options[CURLOPT_COOKIE] = $this->request->getCookies();
        }
        if (
            $this->request->getHttpMethod() === SimpleHttpRequest::HTTP_METHOD_POST ||
            $this->request->getHttpMethod() === SimpleHttpRequest::HTTP_METHOD_PATCH ||
            $this->request->getHttpMethod() === SimpleHttpRequest::HTTP_METHOD_PUT
        ) {
            $options[CURLOPT_POSTFIELDS] = $this->request->getBody();
        }
        curl_setopt_array($curl, $options);

        $this->responseData = resolve(SimpleHttpResponse::class,[
            'data'  => curl_exec($curl),
            'info'  => curl_getinfo($curl),
            'error' => curl_error($curl)
        ]);
        curl_close($curl);
        if ($this->request->getVerbose()) {
            dump([
                'Request' => $options,
                'Response' =>$this->responseData->getAttributes()
            ]);
        }

        return $this->responseData;
    }

}
