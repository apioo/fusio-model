<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Nullable;

#[Description('Definition of a structural type within a TypeSchema')]
class SchemaType implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier of the type definition')]
    protected ?string $name = null;
    #[Description('Base primitive or compound structural category')]
    protected ?string $type = null;
    #[Description('Detailed description of the type')]
    protected ?string $description = null;
    #[Description('Flags whether this type definition is deprecated')]
    protected ?bool $deprecated = null;
    #[Description('Optional parent type name if extending another struct')]
    #[Nullable(true)]
    protected ?string $parent = null;
    #[Description('Optional target type name if this type acts as a reference or alias')]
    #[Nullable(true)]
    protected ?string $reference = null;
    /**
     * @var array<SchemaTypeProperty>|null
     */
    #[Description('Properties or fields declared on this type')]
    protected ?array $properties = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setDeprecated(?bool $deprecated): void
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }
    public function setParent(?string $parent): void
    {
        $this->parent = $parent;
    }
    public function getParent(): ?string
    {
        return $this->parent;
    }
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * @param array<SchemaTypeProperty>|null $properties
     */
    public function setProperties(?array $properties): void
    {
        $this->properties = $properties;
    }
    /**
     * @return array<SchemaTypeProperty>|null
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('type', $this->type);
        $record->put('description', $this->description);
        $record->put('deprecated', $this->deprecated);
        $record->put('parent', $this->parent);
        $record->put('reference', $this->reference);
        $record->put('properties', $this->properties);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

