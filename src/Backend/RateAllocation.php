<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a rate allocation, in case a request matches it gets assigned to the attached rate')]
class RateAllocation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    protected ?int $operationId = null;
    protected ?int $userId = null;
    protected ?int $planId = null;
    protected ?int $appId = null;
    #[Description('Whether the request is authenticated')]
    protected ?bool $authenticated = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setOperationId(?int $operationId): void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId(): ?int
    {
        return $this->operationId;
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
    public function setAppId(?int $appId): void
    {
        $this->appId = $appId;
    }
    public function getAppId(): ?int
    {
        return $this->appId;
    }
    public function setAuthenticated(?bool $authenticated): void
    {
        $this->authenticated = $authenticated;
    }
    public function getAuthenticated(): ?bool
    {
        return $this->authenticated;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('operationId', $this->operationId);
        $record->put('userId', $this->userId);
        $record->put('planId', $this->planId);
        $record->put('appId', $this->appId);
        $record->put('authenticated', $this->authenticated);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

