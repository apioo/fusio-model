<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Trash_Restore implements \JsonSerializable
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
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id), static function ($value) : bool {
            return $value !== null;
        });
    }
}

