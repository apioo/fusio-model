<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Result of a backup import operation')]
class BackupImportResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?bool $success = null;
    protected ?string $message = null;
    /**
     * @var array<string>|null
     */
    protected ?array $logs = null;
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * @param array<string>|null $logs
     */
    public function setLogs(?array $logs): void
    {
        $this->logs = $logs;
    }
    /**
     * @return array<string>|null
     */
    public function getLogs(): ?array
    {
        return $this->logs;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('success', $this->success);
        $record->put('message', $this->message);
        $record->put('logs', $this->logs);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

