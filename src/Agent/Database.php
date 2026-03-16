<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;


class Database implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<DatabaseTable>|null
     */
    protected ?array $tables = null;
    /**
     * @param array<DatabaseTable>|null $tables
     */
    public function setTables(?array $tables): void
    {
        $this->tables = $tables;
    }
    /**
     * @return array<DatabaseTable>|null
     */
    public function getTables(): ?array
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

