<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DashboardRequest implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $path = null;
    protected ?string $ip = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
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
        return (object) array_filter(array('id' => $this->id, 'path' => $this->path, 'ip' => $this->ip, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
