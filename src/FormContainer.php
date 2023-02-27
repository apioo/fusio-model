<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormContainer implements \JsonSerializable
{
    /**
     * @var array<FormElementInput|FormElementSelect|FormElementTag|FormElementTextArea>|null
     */
    protected ?array $element = null;
    /**
     * @param array<FormElementInput|FormElementSelect|FormElementTag|FormElementTextArea>|null $element
     */
    public function setElement(?array $element) : void
    {
        $this->element = $element;
    }
    public function getElement() : ?array
    {
        return $this->element;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('element' => $this->element), static function ($value) : bool {
            return $value !== null;
        });
    }
}
