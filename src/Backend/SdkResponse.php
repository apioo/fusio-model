<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class SdkResponse implements \JsonSerializable
{
    protected ?SdkTypes $types = null;
    public function setTypes(?SdkTypes $types) : void
    {
        $this->types = $types;
    }
    public function getTypes() : ?SdkTypes
    {
        return $this->types;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('types' => $this->types), static function ($value) : bool {
            return $value !== null;
        });
    }
}

