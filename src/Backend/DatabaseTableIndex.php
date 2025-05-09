<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DatabaseTableIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?bool $unique = null;
    /**
     * @var array<string>|null
     */
    protected ?array $columns = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setUnique(?bool $unique): void
    {
        $this->unique = $unique;
    }
    public function getUnique(): ?bool
    {
        return $this->unique;
    }
    /**
     * @param array<string>|null $columns
     */
    public function setColumns(?array $columns): void
    {
        $this->columns = $columns;
    }
    /**
     * @return array<string>|null
     */
    public function getColumns(): ?array
    {
        return $this->columns;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('unique', $this->unique);
        $record->put('columns', $this->columns);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

