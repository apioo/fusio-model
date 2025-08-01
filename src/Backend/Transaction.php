<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a transaction. The system generates a transaction in case a payment was successfully executed')]
class Transaction implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    protected ?int $userId = null;
    protected ?int $planId = null;
    protected ?string $transactionId = null;
    protected ?float $amount = null;
    protected ?float $points = null;
    protected ?\PSX\DateTime\LocalDateTime $periodStart = null;
    protected ?\PSX\DateTime\LocalDateTime $periodEnd = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    public function setPlanId(?int $planId): void
    {
        $this->planId = $planId;
    }
    public function getPlanId(): ?int
    {
        return $this->planId;
    }
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    public function setPoints(?float $points): void
    {
        $this->points = $points;
    }
    public function getPoints(): ?float
    {
        return $this->points;
    }
    public function setPeriodStart(?\PSX\DateTime\LocalDateTime $periodStart): void
    {
        $this->periodStart = $periodStart;
    }
    public function getPeriodStart(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->periodStart;
    }
    public function setPeriodEnd(?\PSX\DateTime\LocalDateTime $periodEnd): void
    {
        $this->periodEnd = $periodEnd;
    }
    public function getPeriodEnd(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->periodEnd;
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
        $record->put('userId', $this->userId);
        $record->put('planId', $this->planId);
        $record->put('transactionId', $this->transactionId);
        $record->put('amount', $this->amount);
        $record->put('points', $this->points);
        $record->put('periodStart', $this->periodStart);
        $record->put('periodEnd', $this->periodEnd);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

