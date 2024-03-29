<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class DashboardTransaction implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $status = null;
    protected ?string $provider = null;
    protected ?string $transactionId = null;
    protected ?float $amount = null;
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?string $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?string
    {
        return $this->status;
    }
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?string
    {
        return $this->provider;
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
    public function setDate(?\PSX\DateTime\LocalDateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->date;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('status', $this->status);
        $record->put('provider', $this->provider);
        $record->put('transactionId', $this->transactionId);
        $record->put('amount', $this->amount);
        $record->put('date', $this->date);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

