<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Relational database table representation')]
class DatabaseTable implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Name of the database table')]
    protected ?string $name = null;
    /**
     * @var array<DatabaseTableColumn>|null
     */
    #[Description('Collection of column definitions in the table')]
    protected ?array $columns = null;
    #[Description('Name of the primary key column or index')]
    protected ?string $primaryKey = null;
    /**
     * @var array<DatabaseTableIndex>|null
     */
    #[Description('List of table index configurations')]
    protected ?array $indexes = null;
    /**
     * @var array<DatabaseTableForeignKey>|null
     */
    #[Description('List of foreign key constraint definitions referencing other tables')]
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
     * @param array<DatabaseTableForeignKey>|null $foreignKeys
     */
    public function setForeignKeys(?array $foreignKeys): void
    {
        $this->foreignKeys = $foreignKeys;
    }
    /**
     * @return array<DatabaseTableForeignKey>|null
     */
    public function getForeignKeys(): ?array
    {
        return $this->foreignKeys;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
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

