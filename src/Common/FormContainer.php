<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class FormContainer implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    /**
     * @return array<FormElementInput|FormElementSelect|FormElementTag|FormElementTextArea>|null
     */
    public function getElement() : ?array
    {
        return $this->element;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('element', $this->element);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

