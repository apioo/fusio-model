<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Represents seed data targeting a specific relational database table, defining its structure and rows.')]
class SeedTable implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The exact name of the target database table (e.g., \'users\', \'settings\').')]
    protected ?string $name = null;
    /**
     * @var array<string>|null
     */
    #[Description('Ordered array of column names corresponding to the database table schema.')]
    protected ?array $columns = null;
    /**
     * @var array<SeedRow>|null
     */
    #[Description('Ordered list of data rows to seed into the table.')]
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
        $record->put('columns', $this->columns);
        $record->put('rows', $this->rows);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

