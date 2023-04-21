<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class SdkResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?SdkTypes $types = null;
    public function setTypes(?SdkTypes $types) : void
    {
        $this->types = $types;
    }
    public function getTypes() : ?SdkTypes
    {
        return $this->types;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('types', $this->types);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

