<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Represents a single database row entry')]
class SeedRow implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Target table column')]
    protected ?string $column = null;
    #[Description('The value to insert')]
    protected ?string $value = null;
    public function setColumn(?string $column): void
    {
        $this->column = $column;
    }
    public function getColumn(): ?string
    {
        return $this->column;
    }
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('column', $this->column);
        $record->put('value', $this->value);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

