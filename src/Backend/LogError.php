<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

class LogError implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    protected ?int $logId = null;
    protected ?string $message = null;
    protected ?string $trace = null;
    protected ?string $file = null;
    protected ?int $line = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setLogId(?int $logId): void
    {
        $this->logId = $logId;
    }
    public function getLogId(): ?int
    {
        return $this->logId;
    }
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
    public function setInsertDate(?\PSX\DateTime\LocalDateTime $insertDate): void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->insertDate;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('logId', $this->logId);
        $record->put('message', $this->message);
        $record->put('trace', $this->trace);
        $record->put('file', $this->file);
        $record->put('line', $this->line);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

