<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Marketplace_Local_App extends Marketplace_App implements \JsonSerializable
{
    protected ?Marketplace_App $remote = null;
    public function setRemote(?Marketplace_App $remote) : void
    {
        $this->remote = $remote;
    }
    public function getRemote() : ?Marketplace_App
    {
        return $this->remote;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('remote' => $this->remote), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

