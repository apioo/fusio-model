<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a system configuration')]
class Config implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('The config value type')]
    protected ?int $type = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('A short description fo this configuration value')]
    protected ?string $description = null;
    #[Description('The actual config value')]
    protected mixed $value = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setType(?int $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?int
    {
        return $this->type;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setValue(mixed $value): void
    {
        $this->value = $value;
    }
    public function getValue(): mixed
    {
        return $this->value;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('type', $this->type);
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('value', $this->value);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

