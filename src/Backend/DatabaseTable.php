<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a relational table on a database connection')]
class DatabaseTable implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Name of the table')]
    protected ?string $name = null;
    /**
     * @var array<DatabaseTableColumn>|null
     */
    #[Description('Available columns on the table')]
    protected ?array $columns = null;
    #[Description('The primary key column')]
    protected ?string $primaryKey = null;
    /**
     * @var array<DatabaseTableIndex>|null
     */
    #[Description('Available indices on the table')]
    protected ?array $indexes = null;
    /**
     * @var array<DatabaseTableForeignKeyConstraint>|null
     */
    #[Description('Available foreign key constraints')]
    protected ?array $foreignKeys = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param array<DatabaseTableColumn>|null $columns
     */
    public function setColumns(?array $columns): void
    {
        $this->columns = $columns;
    }
    /**
     * @return array<DatabaseTableColumn>|null
     */
    public function getColumns(): ?array
    {
        return $this->columns;
    }
    public function setPrimaryKey(?string $primaryKey): void
    {
        $this->primaryKey = $primaryKey;
    }
    public function getPrimaryKey(): ?string
    {
        return $this->primaryKey;
    }
    /**
     * @param array<DatabaseTableIndex>|null $indexes
     */
    public function setIndexes(?array $indexes): void
    {
        $this->indexes = $indexes;
    }
    /**
     * @return array<DatabaseTableIndex>|null
     */
    public function getIndexes(): ?array
    {
        return $this->indexes;
    }
    /**
     * @param array<DatabaseTableForeignKeyConstraint>|null $foreignKeys
     */
    public function setForeignKeys(?array $foreignKeys): void
    {
        $this->foreignKeys = $foreignKeys;
    }
    /**
     * @return array<DatabaseTableForeignKeyConstraint>|null
     */
    public function getForeignKeys(): ?array
    {
        return $this->foreignKeys;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('columns', $this->columns);
        $record->put('primaryKey', $this->primaryKey);
        $record->put('indexes', $this->indexes);
        $record->put('foreignKeys', $this->foreignKeys);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

