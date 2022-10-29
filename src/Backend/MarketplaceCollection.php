<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceCollection implements \JsonSerializable
{
    protected ?MarketplaceCollectionApps $apps = null;
    public function setApps(?MarketplaceCollectionApps $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?MarketplaceCollectionApps
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

