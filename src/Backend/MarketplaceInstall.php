<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceInstall implements \JsonSerializable
{
    protected ?string $name = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name), static function ($value) : bool {
            return $value !== null;
        });
    }
}
