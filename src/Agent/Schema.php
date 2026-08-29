<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('TypeSchema container holding structural definitions')]
class Schema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Name of the schema document')]
    protected ?string $name = null;
    /**
     * @var array<SchemaType>|null
     */
    #[Description('Collection of defined types in this schema')]
    protected ?array $types = null;
    #[Description('Index or identifier pointing to the root entry type')]
    protected ?int $root = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param array<SchemaType>|null $types
     */
    public function setTypes(?array $types): void
    {
        $this->types = $types;
    }
    /**
     * @return array<SchemaType>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    public function setRoot(?int $root): void
    {
        $this->root = $root;
    }
    public function getRoot(): ?int
    {
        return $this->root;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('types', $this->types);
        $record->put('root', $this->root);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

