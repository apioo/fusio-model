<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents a concrete generator class')]
class GeneratorIndexProvider implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Human-readable name of the generator class')]
    protected ?string $name = null;
    #[Description('Technical identifier of the generator class')]
    protected ?string $class = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setClass(?string $class): void
    {
        $this->class = $class;
    }
    public function getClass(): ?string
    {
        return $this->class;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('class', $this->class);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

