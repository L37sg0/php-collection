<?php

namespace App\Modules\Base\Integration\SimpleHttp;

/**
 * @package Base
 * Extend this class and put it in same directory of your extended SimpleHttpClient class
 * @property $httpMethod
 */
abstract class SimpleHttpRequest

{
    const HTTP_METHOD_GET       = 'GET';
    const HTTP_METHOD_DELETE    = 'DELETE';
    const HTTP_METHOD_PUT       = 'PUT';
    const HTTP_METHOD_POST      = 'POST';
    const HTTP_METHOD_PATCH     = 'PATCH';

    /** @var string $httpMethod */
    protected $httpMethod;

    /** @var array $headers */
    protected $headers;

    /** @var array $body */
    protected $body=[];

    /** @var string $endpoint */
    protected $endpoint;

    /** @var bool $urlEncodedBody */
    protected $urlEncodedBody = false;

    /** @var array $cookies */
    protected $cookies = [];

    /** @var string $userAgent */
    protected $userAgent = 'SimpleHttp/1.0';

    /** @var bool $verbose */
    protected $verbose = false;

    public function __construct() {
        if ($this->httpMethod === self::HTTP_METHOD_GET) {
            $this->endpoint .= '?';
            foreach ($this->body as $key => $value) {
                $this->endpoint .= "$key=$value&";
            }
        }
    }

    /**
     * @return array
     */
    public function getHeaders() {
        $headers = [];
        foreach ($this->headers as $key => $value) {
            $headers[] = sprintf('%s: %s', $key, $value);
        }
        return $headers;
    }

    /**
     * @return false|string
     */
    public function getBody() {
        if ($this->headers["Content-Type"] ==="application/xml") {
            return $this->body[0];
        }
        if ($this->urlEncodedBody) {
            return http_build_query($this->body);
        }
        return json_encode($this->body);
    }

    /**
     * @return string
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getHttpMethod() {
        return $this->httpMethod;
    }

    /**
     * @return false|string
     */
    public function getCookies() {
        if (!empty($this->cookies)) {
            return implode(';', $this->cookies);
        }
        return false;
    }

    /**
     * @return string
     */
    public function getUserAgent() {
        return $this->userAgent;
    }

    /**
     * @return bool
     */
    public function getVerbose() {
        return $this->verbose;
    }

}
