<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Database index definition')]
class DatabaseTableIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Index identifier name')]
    protected ?string $name = null;
    #[Description('Flags whether the index enforces unique constraints across its columns')]
    protected ?bool $unique = null;
    /**
     * @var array<string>|null
     */
    #[Description('Ordered list of column names included in the index')]
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
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
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

