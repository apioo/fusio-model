<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Relational database structure definition')]
class Database implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<DatabaseTable>|null
     */
    #[Description('List of database table definitions')]
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

