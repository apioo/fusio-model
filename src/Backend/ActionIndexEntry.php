<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ActionIndexEntry implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $class = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setClass(?string $class) : void
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'class' => $this->class), static function ($value) : bool {
            return $value !== null;
        });
    }
}
