<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class OperationSchema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $description = null;
    protected ?string $type = null;
    protected ?string $format = null;
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

