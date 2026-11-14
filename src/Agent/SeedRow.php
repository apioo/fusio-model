<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Represents a single row of data containing values aligned by index with the columns array.')]
class SeedRow implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    #[Description('An ordered array of cell values for this row, where each value maps directly to the column at the same index.')]
    protected ?array $values = null;
    /**
     * @param array<string>|null $values
     */
    public function setValues(?array $values): void
    {
        $this->values = $values;
    }
    /**
     * @return array<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('values', $this->values);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

