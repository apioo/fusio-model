<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Generator_Index_Providers implements \JsonSerializable
{
    /**
     * @var array<Generator_Index_Provider>|null
     */
    protected ?array $providers = null;
    /**
     * @param array<Generator_Index_Provider>|null $providers
     */
    public function setProviders(?array $providers) : void
    {
        $this->providers = $providers;
    }
    public function getProviders() : ?array
    {
        return $this->providers;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('providers' => $this->providers), static function ($value) : bool {
            return $value !== null;
        });
    }
}

