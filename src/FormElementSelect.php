<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormElementSelect extends FormElement implements \JsonSerializable
{
    /**
     * @var array<FormElementSelectOption>|null
     */
    protected ?array $options = null;
    /**
     * @param array<FormElementSelectOption>|null $options
     */
    public function setOptions(?array $options) : void
    {
        $this->options = $options;
    }
    public function getOptions() : ?array
    {
        return $this->options;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('options' => $this->options), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

