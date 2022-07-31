<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Connection_Introspection_Entity_Row implements \JsonSerializable
{
    /**
     * @var array<string>|null
     */
    protected ?array $values = null;
    /**
     * @param array<string>|null $values
     */
    public function setValues(?array $values) : void
    {
        $this->values = $values;
    }
    public function getValues() : ?array
    {
        return $this->values;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('values' => $this->values), static function ($value) : bool {
            return $value !== null;
        });
    }
}

