<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormQuery implements \JsonSerializable
{
    protected ?string $class = null;
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
        return (object) array_filter(array('class' => $this->class), static function ($value) : bool {
            return $value !== null;
        });
    }
}

