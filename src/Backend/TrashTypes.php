<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('List of available entity types that can be restored from the trash')]
class TrashTypes implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    #[Description('Array of restorably deleted object type identifiers')]
    protected ?array $types = null;
    /**
     * @param array<string>|null $types
     */
    public function setTypes(?array $types): void
    {
        $this->types = $types;
    }
    /**
     * @return array<string>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('types', $this->types);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

