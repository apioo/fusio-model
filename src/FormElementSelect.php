<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormElementSelect extends FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('options', $this->options);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

