<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class App_Token implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $token = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scope = null;
    protected ?string $ip = null;
    protected ?\DateTime $expire = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * @param array<string>|null $scope
     */
    public function setScope(?array $scope) : void
    {
        $this->scope = $scope;
    }
    public function getScope() : ?array
    {
        return $this->scope;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setExpire(?\DateTime $expire) : void
    {
        $this->expire = $expire;
    }
    public function getExpire() : ?\DateTime
    {
        return $this->expire;
    }
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'token' => $this->token, 'scope' => $this->scope, 'ip' => $this->ip, 'expire' => $this->expire, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}

