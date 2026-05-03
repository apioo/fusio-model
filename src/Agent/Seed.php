<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;


class Seed implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var \PSX\Record\Record<array<SeedRow>>|null
     */
    protected ?\PSX\Record\Record $tables = null;
    /**
     * @param \PSX\Record\Record<array<SeedRow>>|null $tables
     */
    public function setTables(?\PSX\Record\Record $tables): void
    {
        $this->tables = $tables;
    }
    /**
     * @return \PSX\Record\Record<array<SeedRow>>|null
     */
    public function getTables(): ?\PSX\Record\Record
    {
        return $this->tables;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('tables', $this->tables);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

