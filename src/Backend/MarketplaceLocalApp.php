<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceLocalApp extends MarketplaceApp implements \JsonSerializable
{
    protected ?MarketplaceApp $remote = null;
    public function setRemote(?MarketplaceApp $remote) : void
    {
        $this->remote = $remote;
    }
    public function getRemote() : ?MarketplaceApp
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
