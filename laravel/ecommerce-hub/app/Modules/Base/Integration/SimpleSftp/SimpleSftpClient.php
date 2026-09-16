<?php
namespace App\Modules\Base\Integration\SimpleSftp;

/**
 * @package Base
* Extend this class, and it will search for Requests under Requests directory of its namespace
*/
abstract class SimpleSftpClient
{
    /** @var SimpleSftpResponse $responseData */
    protected $responseData;

    /** @var string $methodNamespace */
    protected $methodNamespace;

    /** @var SimpleSftpRequest $request */
    protected $request;

    /**
    * SimpleSftpClient constructor.
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
     * @return SimpleSftpResponse
     * @throws \ReflectionException
     */
    public function __doRequest(string $name, array $arguments)
    {
        /** @var SimpleSftpRequest request */
        $this->request = (new \ReflectionClass($this->methodNamespace . $name))->newInstanceArgs($arguments);

        $url = $this->request->getEndpoint();
        $port = $this->request->getPort();
        $basePath = $this->request->getBasePath();

        $curl = curl_init();
        $options = [
            CURLOPT_URL => "sftp://$url:$port" . $basePath,
            CURLOPT_PROTOCOLS => CURLPROTO_SFTP,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_UPLOAD => false,
            CURLOPT_DIRLISTONLY => false,
//            CURLOPT_SSH_AUTH_TYPES => $this->request->getAuthType(),
            CURLOPT_VERBOSE => $this->request->getVerbose()
        ];

        $options[CURLOPT_USERPWD] = $this->request->getUsername() . ":" . $this->request->getPassword();

//        if ($this->request->getAuthType() === SimpleSftpRequest::AUTH_TYPE_PASSWORD) {
//            $options[CURLOPT_USERPWD] = $this->request->getUsername() . ":" . $this->request->getPassword();
//        }
        $path = '/.';

        switch ($this->request->getSftpMethod()) {
            case SimpleSftpRequest::SFTP_METHOD_READ:
                $path = $this->request->getFileName();
                $options = $this->getOptionsForRead($options, $path);
                break;
            case SimpleSftpRequest::SFTP_METHOD_WRITE:
                $path = $this->request->getFileName();
                $data = $this->request->getDataLoad();
                $options = $this->getOptionsForWrite($options, $path, $data);
                break;
            case SimpleSftpRequest::SFTP_METHOD_DELETE:
                $path = $this->request->getFileName();
                $options  = $this->getOptionsForDelete($options, $path);
                break;
            default:
                $options = $this->getOptionsForList($options, $path);
        }

        curl_setopt_array($curl, $options);
        $data = curl_exec($curl);
        $info = curl_getinfo($curl);
        $error = curl_error($curl);
        $this->responseData = new SimpleSftpResponse($data, $info, $error);

        curl_close($curl);

        return $this->responseData;
    }

    /**
     * @param array $options
     * @param $path
     * @return array
     */
    public function getOptionsForRead(array $options, $path)
    {
        $options[CURLOPT_URL] .= $path;
        return $options;
    }

    /**
     * @param array $options
     * @param $path
     * @param $data
     * @return array
     */
    public function getOptionsForWrite(array $options, $path, $data)
    {
        $options[CURLOPT_URL] .= $path;
        $options[CURLOPT_UPLOAD] = true;
        $options[CURLOPT_READFUNCTION] = function ($handle, $fd, $length) use ($data) {
            return substr($data, $fd, $length);
        };
        $options[CURLOPT_INFILESIZE] = strlen($data);
        return $options;
    }

    /**
     * @param array $options
     * @param $path
     * @return array
     */
    public function getOptionsForDelete(array $options, $path)
    {
        $options[CURLOPT_URL] .= $path;
        return $options;
    }

    /**
     * @param array $options
     * @param $path
     * @return array
     */
    public function getOptionsForList(array $options, $path)
    {
        $options[CURLOPT_URL] .= $path;
        $options[CURLOPT_DIRLISTONLY] = true;
        return $options;
    }

}
