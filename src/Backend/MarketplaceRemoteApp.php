<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceRemoteApp extends MarketplaceApp implements \JsonSerializable
{
    protected ?MarketplaceApp $local = null;
    public function setLocal(?MarketplaceApp $local) : void
    {
        $this->local = $local;
    }
    public function getLocal() : ?MarketplaceApp
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

