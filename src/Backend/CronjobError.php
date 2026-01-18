<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents an error which occurred on cronjob execution')]
class CronjobError implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $message = null;
    protected ?string $trace = null;
    protected ?string $file = null;
    protected ?int $line = null;
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setTrace(?string $trace): void
    {
        $this->trace = $trace;
    }
    public function getTrace(): ?string
    {
        return $this->trace;
    }
    public function setFile(?string $file): void
    {
        $this->file = $file;
    }
    public function getFile(): ?string
    {
        return $this->file;
    }
    public function setLine(?int $line): void
    {
        $this->line = $line;
    }
    public function getLine(): ?int
    {
        return $this->line;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('message', $this->message);
        $record->put('trace', $this->trace);
        $record->put('file', $this->file);
        $record->put('line', $this->line);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

