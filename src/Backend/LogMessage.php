<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents an message logged during a specific HTTP request')]
class LogMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Identifier of the associated parent log entry')]
    protected ?int $logId = null;
    #[Description('Log level described by RFC 5424')]
    protected ?int $level = null;
    #[Description('Log message')]
    protected ?string $message = null;
    #[Description('Stack trace associated with the error exception')]
    protected ?LogMessageContext $context = null;
    #[Description('Timestamp when the log error was recorded')]
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
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
    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }
    public function getLevel(): ?int
    {
        return $this->level;
    }
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setContext(?LogMessageContext $context): void
    {
        $this->context = $context;
    }
    public function getContext(): ?LogMessageContext
    {
        return $this->context;
    }
    public function setInsertDate(?\PSX\DateTime\LocalDateTime $insertDate): void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->insertDate;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('id', $this->id);
        $record->put('logId', $this->logId);
        $record->put('level', $this->level);
        $record->put('message', $this->message);
        $record->put('context', $this->context);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

