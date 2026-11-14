<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Nullable;

#[Description('Property declaration on a struct type')]
class SchemaTypeProperty implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Property key name')]
    protected ?string $name = null;
    #[Description('Data type of the property, one of: string, integer, number, boolean, any, object, array, map')]
    protected ?string $type = null;
    #[Description('Target of the property. Required if type is object (name of a type), array (item type) or map (value type), the value is either the name of a type defined in types or a scalar type (string, integer, number, boolean, any). Null for scalar properties')]
    #[Nullable(true)]
    protected ?string $reference = null;
    #[Description('Detailed description of the property field')]
    protected ?string $description = null;
    #[Description('Indicates if null is an acceptable value for this property')]
    protected ?bool $nullable = null;
    #[Description('Flags whether this property is marked for deprecation')]
    protected ?bool $deprecated = null;
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
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }
    public function getReference(): ?string
    {
        return $this->reference;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setNullable(?bool $nullable): void
    {
        $this->nullable = $nullable;
    }
    public function getNullable(): ?bool
    {
        return $this->nullable;
    }
    public function setDeprecated(?bool $deprecated): void
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
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
        $record->put('reference', $this->reference);
        $record->put('description', $this->description);
        $record->put('nullable', $this->nullable);
        $record->put('deprecated', $this->deprecated);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

