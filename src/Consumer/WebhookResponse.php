<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class WebhookResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $status = null;
    protected ?int $code = null;
    protected ?string $attempts = null;
    protected ?string $executeDate = null;
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
    public function setAttempts(?string $attempts): void
    {
        $this->attempts = $attempts;
    }
    public function getAttempts(): ?string
    {
        return $this->attempts;
    }
    public function setExecuteDate(?string $executeDate): void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate(): ?string
    {
        return $this->executeDate;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('status', $this->status);
        $record->put('code', $this->code);
        $record->put('attempts', $this->attempts);
        $record->put('executeDate', $this->executeDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

