<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Transaction implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $userId = null;
    protected ?int $planId = null;
    protected ?string $transactionId = null;
    protected ?float $amount = null;
    protected ?float $points = null;
    protected ?\DateTime $periodStart = null;
    protected ?\DateTime $periodEnd = null;
    protected ?\DateTime $insertDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function setTransactionId(?string $transactionId) : void
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId() : ?string
    {
        return $this->transactionId;
    }
    public function setAmount(?float $amount) : void
    {
        $this->amount = $amount;
    }
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    public function setPoints(?float $points) : void
    {
        $this->points = $points;
    }
    public function getPoints() : ?float
    {
        return $this->points;
    }
    public function setPeriodStart(?\DateTime $periodStart) : void
    {
        $this->periodStart = $periodStart;
    }
    public function getPeriodStart() : ?\DateTime
    {
        return $this->periodStart;
    }
    public function setPeriodEnd(?\DateTime $periodEnd) : void
    {
        $this->periodEnd = $periodEnd;
    }
    public function getPeriodEnd() : ?\DateTime
    {
        return $this->periodEnd;
    }
    public function setInsertDate(?\DateTime $insertDate) : void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate() : ?\DateTime
    {
        return $this->insertDate;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'userId' => $this->userId, 'planId' => $this->planId, 'transactionId' => $this->transactionId, 'amount' => $this->amount, 'points' => $this->points, 'periodStart' => $this->periodStart, 'periodEnd' => $this->periodEnd, 'insertDate' => $this->insertDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}

