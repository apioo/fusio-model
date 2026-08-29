<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

class SdkResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    protected ?SdkTypes $types = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    public function setTypes(?SdkTypes $types): void
    {
        $this->types = $types;
    }
    public function getTypes(): ?SdkTypes
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
        $record->put('kind', $this->kind);
        $record->put('types', $this->types);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

