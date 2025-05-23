<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class StatisticCount implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $count = null;
    protected ?\PSX\DateTime\LocalDateTime $from = null;
    protected ?\PSX\DateTime\LocalDateTime $to = null;
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }
    public function getCount(): ?int
    {
        return $this->count;
    }
    public function setFrom(?\PSX\DateTime\LocalDateTime $from): void
    {
        $this->from = $from;
    }
    public function getFrom(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->from;
    }
    public function setTo(?\PSX\DateTime\LocalDateTime $to): void
    {
        $this->to = $to;
    }
    public function getTo(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->to;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('count', $this->count);
        $record->put('from', $this->from);
        $record->put('to', $this->to);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

