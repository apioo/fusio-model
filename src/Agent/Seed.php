<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('A collection of database seed tables designed to populate or initialize data stores.')]
class Seed implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<SeedTable>|null
     */
    #[Description('List of database tables with their corresponding columns and rows to be seeded.')]
    protected ?array $tables = null;
    /**
     * @param array<SeedTable>|null $tables
     */
    public function setTables(?array $tables): void
    {
        $this->tables = $tables;
    }
    /**
     * @return array<SeedTable>|null
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

