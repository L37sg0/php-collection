<?php

namespace App\Modules\Base\Integration\SimpleHttp;

/**
 * @package Base
 * CURL response wrapper for HTTP
 */
class SimpleHttpResponse
{
    const CONTENT_TYPE_JSON = 'application/json';
    const CONTENT_TYPE_XML  = 'application/xml';

    /** @var array $headers */
    protected $headers;

    /** @var string $body */
    protected $body;

    /** @var array $info */
    protected $info;

    /** @var int $statusCode */
    protected $statusCode = 0;

    /** @var string $error */
    protected $error;

    /** @var string $contentType */
    protected $contentType;

    /**
     * @param string $body
     * @param array $info
     * @param string $error
     */
    public function __construct(string $data, array $info, string $error) {
        $headerSize = $info['header_size'];
        $this->headers = substr($data, 0,$headerSize);
        $this->body = substr($data, $headerSize);
        $this->info = $info;
        $this->statusCode = $info['http_code'];
        $this->error = $error;
        $this->contentType = $info['content_type'];

    }

    /**
     * @return array|mixed
     * Returns array if content type is JSON
     */
    public function getBody() {
        if (strpos($this->contentType, self::CONTENT_TYPE_JSON) !== false) {
            return json_decode(str_replace("\n", '', $this->body), true);
        }
        return $this->body;
    }

    public function getBodyGzipDecoded() {
        $body = gzdecode($this->body);
        if (strpos($this->contentType, self::CONTENT_TYPE_JSON) !== false) {
            return json_decode(str_replace("\n", '', $body), true);
        }
        return $body;
    }

    /**
     * @return array
     */
    public function getHeaders() {
        return explode("\r\n", $this->headers);
    }

    /**
     * @return array
     */
    public function getInfo() {
        return $this->info;
    }

    /**
     * @return int|mixed
     */
    public function getStatusCode() {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getError() {
        return $this->error;
    }

    /**
     * @return mixed|string
     */
    public function getContentType() {
        return $this->contentType;
    }

    /**
     * @return array
     */
    public function getAttributes() {
        $attributes = [];
        foreach (get_object_vars($this) as $key => $value) {
            $method = 'get' . ucfirst($key);
            $attributes[$key] = $this->$method();
        }
        return $attributes;
    }
}
