<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Log implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $appId;
    /**
     * @var string|null
     */
    protected $ip;
    /**
     * @var string|null
     */
    protected $userAgent;
    /**
     * @var string|null
     */
    protected $method;
    /**
     * @var string|null
     */
    protected $path;
    /**
     * @var string|null
     */
    protected $header;
    /**
     * @var string|null
     */
    protected $body;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @param int|null $id
     */
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param int|null $appId
     */
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    /**
     * @return int|null
     */
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    /**
     * @param string|null $ip
     */
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    /**
     * @return string|null
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * @param string|null $userAgent
     */
    public function setUserAgent(?string $userAgent) : void
    {
        $this->userAgent = $userAgent;
    }
    /**
     * @return string|null
     */
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    /**
     * @param string|null $method
     */
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    /**
     * @return string|null
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * @param string|null $path
     */
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    /**
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param string|null $header
     */
    public function setHeader(?string $header) : void
    {
        $this->header = $header;
    }
    /**
     * @return string|null
     */
    public function getHeader() : ?string
    {
        return $this->header;
    }
    /**
     * @param string|null $body
     */
    public function setBody(?string $body) : void
    {
        $this->body = $body;
    }
    /**
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * @param \DateTime|null $date
     */
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    /**
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('id' => $this->id, 'appId' => $this->appId, 'ip' => $this->ip, 'userAgent' => $this->userAgent, 'method' => $this->method, 'path' => $this->path, 'header' => $this->header, 'body' => $this->body, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
