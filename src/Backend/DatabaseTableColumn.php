<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DatabaseTableColumn implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $type = null;
    protected ?int $length = null;
    protected ?int $precision = null;
    protected ?int $scale = null;
    protected ?bool $unsigned = null;
    protected ?bool $fixed = null;
    protected ?bool $notNull = null;
    protected ?bool $autoIncrement = null;
    protected mixed $default = null;
    protected ?string $comment = null;
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
    public function setLength(?int $length): void
    {
        $this->length = $length;
    }
    public function getLength(): ?int
    {
        return $this->length;
    }
    public function setPrecision(?int $precision): void
    {
        $this->precision = $precision;
    }
    public function getPrecision(): ?int
    {
        return $this->precision;
    }
    public function setScale(?int $scale): void
    {
        $this->scale = $scale;
    }
    public function getScale(): ?int
    {
        return $this->scale;
    }
    public function setUnsigned(?bool $unsigned): void
    {
        $this->unsigned = $unsigned;
    }
    public function getUnsigned(): ?bool
    {
        return $this->unsigned;
    }
    public function setFixed(?bool $fixed): void
    {
        $this->fixed = $fixed;
    }
    public function getFixed(): ?bool
    {
        return $this->fixed;
    }
    public function setNotNull(?bool $notNull): void
    {
        $this->notNull = $notNull;
    }
    public function getNotNull(): ?bool
    {
        return $this->notNull;
    }
    public function setAutoIncrement(?bool $autoIncrement): void
    {
        $this->autoIncrement = $autoIncrement;
    }
    public function getAutoIncrement(): ?bool
    {
        return $this->autoIncrement;
    }
    public function setDefault(mixed $default): void
    {
        $this->default = $default;
    }
    public function getDefault(): mixed
    {
        return $this->default;
    }
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
    public function getComment(): ?string
    {
        return $this->comment;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('type', $this->type);
        $record->put('length', $this->length);
        $record->put('precision', $this->precision);
        $record->put('scale', $this->scale);
        $record->put('unsigned', $this->unsigned);
        $record->put('fixed', $this->fixed);
        $record->put('notNull', $this->notNull);
        $record->put('autoIncrement', $this->autoIncrement);
        $record->put('default', $this->default);
        $record->put('comment', $this->comment);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

