<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Route_Index_Providers implements \JsonSerializable
{
    /**
     * @var array<Route_Index_Provider>|null
     */
    protected ?array $providers = null;
    /**
     * @param array<Route_Index_Provider>|null $providers
     */
    public function setProviders(?array $providers) : void
    {
        $this->providers = $providers;
    }
    public function getProviders() : ?array
    {
        return $this->providers;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('providers' => $this->providers), static function ($value) : bool {
            return $value !== null;
        });
    }
}

