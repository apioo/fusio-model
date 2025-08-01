<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a column at a relation table')]
class DatabaseTableColumn implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Name of the column')]
    protected ?string $name = null;
    #[Description('The column type i.e. integer or string')]
    protected ?string $type = null;
    #[Description('Optional the max length of the column')]
    protected ?int $length = null;
    #[Description('Optional the precision of the column')]
    protected ?int $precision = null;
    #[Description('Optional the scale of the column')]
    protected ?int $scale = null;
    #[Description('Indicates whether the column is unsigned, relevant for integer types')]
    protected ?bool $unsigned = null;
    #[Description('Indicates whether the column has a fixed length')]
    protected ?bool $fixed = null;
    #[Description('Indicates whether the column allows null')]
    protected ?bool $notNull = null;
    #[Description('Indicates whether this column is an auto increment column')]
    protected ?bool $autoIncrement = null;
    #[Description('Optional defines the default value')]
    protected mixed $default = null;
    #[Description('Optional a comment for this column')]
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

