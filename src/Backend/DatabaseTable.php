<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DatabaseTable implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    /**
     * @var array<DatabaseTableColumn>|null
     */
    protected ?array $columns = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param array<DatabaseTableColumn>|null $columns
     */
    public function setColumns(?array $columns) : void
    {
        $this->columns = $columns;
    }
    /**
     * @return array<DatabaseTableColumn>|null
     */
    public function getColumns() : ?array
    {
        return $this->columns;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('columns', $this->columns);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

