<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Marketplace_Collection implements \JsonSerializable
{
    protected ?Marketplace_Collection_Apps $apps = null;
    public function setApps(?Marketplace_Collection_Apps $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?Marketplace_Collection_Apps
    {
        return $this->apps;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('apps' => $this->apps), static function ($value) : bool {
            return $value !== null;
        });
    }
}

