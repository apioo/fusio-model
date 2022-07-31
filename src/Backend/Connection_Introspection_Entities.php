<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Connection_Introspection_Entities implements \JsonSerializable
{
    /**
     * @var array<string>|null
     */
    protected ?array $entities = null;
    /**
     * @param array<string>|null $entities
     */
    public function setEntities(?array $entities) : void
    {
        $this->entities = $entities;
    }
    public function getEntities() : ?array
    {
        return $this->entities;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('entities' => $this->entities), static function ($value) : bool {
            return $value !== null;
        });
    }
}

