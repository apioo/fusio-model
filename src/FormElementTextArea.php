<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormElementTextArea extends FormElement implements \JsonSerializable
{
    protected ?string $mode = null;
    public function setMode(?string $mode) : void
    {
        $this->mode = $mode;
    }
    public function getMode() : ?string
    {
        return $this->mode;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('mode' => $this->mode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
