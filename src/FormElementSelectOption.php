<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormElementSelectOption implements \JsonSerializable
{
    protected ?string $key = null;
    protected ?string $value = null;
    public function setKey(?string $key) : void
    {
        $this->key = $key;
    }
    public function getKey() : ?string
    {
        return $this->key;
    }
    public function setValue(?string $value) : void
    {
        $this->value = $value;
    }
    public function getValue() : ?string
    {
        return $this->value;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('key' => $this->key, 'value' => $this->value), static function ($value) : bool {
            return $value !== null;
        });
    }
}
