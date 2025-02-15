<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DatabaseTables implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $tables = null;
    /**
     * @param array<string>|null $tables
     */
    public function setTables(?array $tables): void
    {
        $this->tables = $tables;
    }
    /**
     * @return array<string>|null
     */
    public function getTables(): ?array
    {
        return $this->tables;
    }
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

