<?php

declare(strict_types = 1);

namespace Fusio\Model;


class FormElementTextArea extends FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('mode', $this->mode);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

