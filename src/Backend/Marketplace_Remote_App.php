<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Marketplace_Remote_App extends Marketplace_App implements \JsonSerializable
{
    protected ?Marketplace_App $local = null;
    public function setLocal(?Marketplace_App $local) : void
    {
        $this->local = $local;
    }
    public function getLocal() : ?Marketplace_App
    {
        return $this->local;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('local' => $this->local), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

