<?php

declare(strict_types = 1);

namespace Fusio\Model;


class Form_Element_Input extends Form_Element implements \JsonSerializable
{
    protected ?string $type = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('type' => $this->type), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

