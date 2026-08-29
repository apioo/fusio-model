<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Seed data targeting a specific database table')]
class SeedTable implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Target database table name')]
    protected ?string $name = null;
    /**
     * @var array<SeedRow>|null
     */
    #[Description('List of key-value row objects to populate during database seeding')]
    protected ?array $rows = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param array<SeedRow>|null $rows
     */
    public function setRows(?array $rows): void
    {
        $this->rows = $rows;
    }
    /**
     * @return array<SeedRow>|null
     */
    public function getRows(): ?array
    {
        return $this->rows;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('rows', $this->rows);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

