<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class RateAllocation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $routeId = null;
    protected ?int $userId = null;
    protected ?int $planId = null;
    protected ?int $appId = null;
    protected ?bool $authenticated = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setRouteId(?int $routeId) : void
    {
        $this->routeId = $routeId;
    }
    public function getRouteId() : ?int
    {
        return $this->routeId;
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
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setAuthenticated(?bool $authenticated) : void
    {
        $this->authenticated = $authenticated;
    }
    public function getAuthenticated() : ?bool
    {
        return $this->authenticated;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('routeId', $this->routeId);
        $record->put('userId', $this->userId);
        $record->put('planId', $this->planId);
        $record->put('appId', $this->appId);
        $record->put('authenticated', $this->authenticated);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

