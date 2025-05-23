<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class WebhookResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?int $code = null;
    protected ?int $attempts = null;
    protected ?string $error = null;
    protected ?\PSX\DateTime\LocalDateTime $executeDate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
    }
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }
    public function getCode(): ?int
    {
        return $this->code;
    }
    public function setAttempts(?int $attempts): void
    {
        $this->attempts = $attempts;
    }
    public function getAttempts(): ?int
    {
        return $this->attempts;
    }
    public function setError(?string $error): void
    {
        $this->error = $error;
    }
    public function getError(): ?string
    {
        return $this->error;
    }
    public function setExecuteDate(?\PSX\DateTime\LocalDateTime $executeDate): void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->executeDate;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('status', $this->status);
        $record->put('code', $this->code);
        $record->put('attempts', $this->attempts);
        $record->put('error', $this->error);
        $record->put('executeDate', $this->executeDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

