<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class GeneratorIndexProviders implements \JsonSerializable
{
    /**
     * @var array<GeneratorIndexProvider>|null
     */
    protected ?array $providers = null;
    /**
     * @param array<GeneratorIndexProvider>|null $providers
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

