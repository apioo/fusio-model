<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Nullable;

#[Description('Column specification for a database table')]
class DatabaseTableColumn implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Column identifier name')]
    protected ?string $name = null;
    #[Description('Database SQL data type')]
    protected ?string $type = null;
    #[Description('Maximum character or byte length for string-like columns')]
    #[Nullable(true)]
    protected ?int $length = null;
    #[Description('Total number of digits allowed for numeric data types')]
    #[Nullable(true)]
    protected ?int $precision = null;
    #[Description('Number of digits to the right of the decimal point for numeric data types')]
    #[Nullable(true)]
    protected ?int $scale = null;
    #[Description('Indicates whether the numeric column is unsigned')]
    protected ?bool $unsigned = null;
    #[Description('Indicates fixed-length storage (e.g., CHAR vs VARCHAR)')]
    protected ?bool $fixed = null;
    #[Description('Specifies if NULL values are forbidden in this column')]
    protected ?bool $notNull = null;
    #[Description('Indicates if the database automatically increments integer keys for new rows')]
    protected ?bool $autoIncrement = null;
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
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
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
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

