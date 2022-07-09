<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Grant implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?App $app = null;
    protected ?\DateTime $createDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setApp(?App $app) : void
    {
        $this->app = $app;
    }
    public function getApp() : ?App
    {
        return $this->app;
    }
    public function setCreateDate(?\DateTime $createDate) : void
    {
        $this->createDate = $createDate;
    }
    public function getCreateDate() : ?\DateTime
    {
        return $this->createDate;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'app' => $this->app, 'createDate' => $this->createDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}

