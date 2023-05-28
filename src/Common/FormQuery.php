<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class FormQuery implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('class', $this->class);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

