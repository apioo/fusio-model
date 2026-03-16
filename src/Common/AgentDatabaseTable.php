<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class AgentDatabaseTable implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    /**
     * @var array<AgentDatabaseTableColumn>|null
     */
    protected ?array $columns = null;
    protected ?string $primaryKey = null;
    /**
     * @var array<AgentDatabaseTableIndex>|null
     */
    protected ?array $indexes = null;
    /**
     * @var array<AgentDatabaseTableForeignKey>|null
     */
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
     * @param array<AgentDatabaseTableColumn>|null $columns
     */
    public function setColumns(?array $columns): void
    {
        $this->columns = $columns;
    }
    /**
     * @return array<AgentDatabaseTableColumn>|null
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
     * @param array<AgentDatabaseTableIndex>|null $indexes
     */
    public function setIndexes(?array $indexes): void
    {
        $this->indexes = $indexes;
    }
    /**
     * @return array<AgentDatabaseTableIndex>|null
     */
    public function getIndexes(): ?array
    {
        return $this->indexes;
    }
    /**
     * @param array<AgentDatabaseTableForeignKey>|null $foreignKeys
     */
    public function setForeignKeys(?array $foreignKeys): void
    {
        $this->foreignKeys = $foreignKeys;
    }
    /**
     * @return array<AgentDatabaseTableForeignKey>|null
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

