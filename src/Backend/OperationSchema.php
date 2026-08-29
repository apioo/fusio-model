<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Defines primitive type constraints for parameter schema definitions')]
class OperationSchema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Description explaining the parameter purpose')]
    protected ?string $description = null;
    #[Description('Primitive type of the parameter i.e. string or integer')]
    protected ?string $type = null;
    #[Description('Type formatting detail i.e. date-time or int64')]
    protected ?string $format = null;
    #[Description('Allowed enumerated string value constraints')]
    protected ?string $enum = null;
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setFormat(?string $format): void
    {
        $this->format = $format;
    }
    public function getFormat(): ?string
    {
        return $this->format;
    }
    public function setEnum(?string $enum): void
    {
        $this->enum = $enum;
    }
    public function getEnum(): ?string
    {
        return $this->enum;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('description', $this->description);
        $record->put('type', $this->type);
        $record->put('format', $this->format);
        $record->put('enum', $this->enum);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

