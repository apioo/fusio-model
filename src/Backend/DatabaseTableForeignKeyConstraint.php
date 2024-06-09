<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DatabaseTableForeignKeyConstraint implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $foreignTable = null;
    /**
     * @var array<string>|null
     */
    protected ?array $localColumnNames = null;
    /**
     * @var array<string>|null
     */
    protected ?array $foreignColumnNames = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setForeignTable(?string $foreignTable) : void
    {
        $this->foreignTable = $foreignTable;
    }
    public function getForeignTable() : ?string
    {
        return $this->foreignTable;
    }
    /**
     * @param array<string>|null $localColumnNames
     */
    public function setLocalColumnNames(?array $localColumnNames) : void
    {
        $this->localColumnNames = $localColumnNames;
    }
    /**
     * @return array<string>|null
     */
    public function getLocalColumnNames() : ?array
    {
        return $this->localColumnNames;
    }
    /**
     * @param array<string>|null $foreignColumnNames
     */
    public function setForeignColumnNames(?array $foreignColumnNames) : void
    {
        $this->foreignColumnNames = $foreignColumnNames;
    }
    /**
     * @return array<string>|null
     */
    public function getForeignColumnNames() : ?array
    {
        return $this->foreignColumnNames;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('foreignTable', $this->foreignTable);
        $record->put('localColumnNames', $this->localColumnNames);
        $record->put('foreignColumnNames', $this->foreignColumnNames);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

