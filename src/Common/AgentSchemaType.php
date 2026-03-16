<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Nullable;

class AgentSchemaType implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $type = null;
    protected ?string $description = null;
    protected ?bool $deprecated = null;
    #[Nullable(true)]
    protected ?string $parent = null;
    #[Nullable(true)]
    protected ?string $reference = null;
    /**
     * @var array<AgentSchemaTypeProperty>|null
     */
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
     * @param array<AgentSchemaTypeProperty>|null $properties
     */
    public function setProperties(?array $properties): void
    {
        $this->properties = $properties;
    }
    /**
     * @return array<AgentSchemaTypeProperty>|null
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

