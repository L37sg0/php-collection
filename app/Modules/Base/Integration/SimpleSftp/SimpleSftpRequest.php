<?php

namespace App\Modules\Base\Integration\SimpleSftp;

/**
 * @package Base
 * Extend this class and put it in same directory of your extended SimpleHttpClient class
 */
abstract class SimpleSftpRequest
{
    public const SFTP_METHOD_READ = 'READ';
    public const SFTP_METHOD_WRITE = 'WRITE';
    public const SFTP_METHOD_LIST = 'LIST';
    public const SFTP_METHOD_DELETE = 'DELETE';

    public const AUTH_TYPE_PASSWORD = 'CURLSSH_AUTH_PASSWORD';
    public const AUTH_TYPE_KEYBOARD = 'CURLSSH_AUTH_KEYBOARD';
    public const AUTH_TYPE_PUBKEY = 'CURLSSH_AUTH_PUBLICKEY';

    /** @var string $endpoint */
    protected string $endpoint;

    /** @var string $port */
    protected string $port;

    /**
     * @var string $basePath
     */
    protected string $basePath;

    /** @var string $username */
    protected string $username;

    /** @var string $password */
    protected string $password;

    /** @var string $pubkey */
    protected string $pubkey;

    /** @var string $sftpMethod */
    protected string $sftpMethod;

    /** @var string $authType */
    protected string $authType;

    /** @var string $dataLoad */
    protected string $dataLoad;

    /** @var string $filename */
    protected string $filename;

    /** @var bool $verbose */
    protected bool $verbose = false;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getPubKey()
    {
        return $this->pubkey;
    }

    /**
     * @return string
     */
    public function getSftpMethod()
    {
        return $this->sftpMethod;
    }

    /**
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * @return string
     */
    public function getDataLoad()
    {
        return $this->dataLoad;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->filename;
    }

    /**
     * @return bool
     */
    public function getVerbose()
    {
        return $this->verbose;
    }
}
