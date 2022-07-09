<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Trash_Types implements \JsonSerializable
{
    /**
     * @var array<string>|null
     */
    protected ?array $types = null;
    /**
     * @param array<string>|null $types
     */
    public function setTypes(?array $types) : void
    {
        $this->types = $types;
    }
    public function getTypes() : ?array
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

