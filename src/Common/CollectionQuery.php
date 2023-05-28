<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class CollectionQuery implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $startIndex = null;
    protected ?int $count = null;
    protected ?string $search = null;
    public function setStartIndex(?int $startIndex) : void
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setCount(?int $count) : void
    {
        $this->count = $count;
    }
    public function getCount() : ?int
    {
        return $this->count;
    }
    public function setSearch(?string $search) : void
    {
        $this->search = $search;
    }
    public function getSearch() : ?string
    {
        return $this->search;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('startIndex', $this->startIndex);
        $record->put('count', $this->count);
        $record->put('search', $this->search);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

