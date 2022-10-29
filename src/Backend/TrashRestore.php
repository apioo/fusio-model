<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class TrashRestore implements \JsonSerializable
{
    protected ?int $id = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id), static function ($value) : bool {
            return $value !== null;
        });
    }
}

