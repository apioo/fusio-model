<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Sdk_Response implements \JsonSerializable
{
    protected ?Sdk_Types $types = null;
    public function setTypes(?Sdk_Types $types) : void
    {
        $this->types = $types;
    }
    public function getTypes() : ?Sdk_Types
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

