<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ScopeRoute implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $routeId = null;
    protected ?bool $allow = null;
    protected ?string $methods = null;
    public function setRouteId(?int $routeId) : void
    {
        $this->routeId = $routeId;
    }
    public function getRouteId() : ?int
    {
        return $this->routeId;
    }
    public function setAllow(?bool $allow) : void
    {
        $this->allow = $allow;
    }
    public function getAllow() : ?bool
    {
        return $this->allow;
    }
    public function setMethods(?string $methods) : void
    {
        $this->methods = $methods;
    }
    public function getMethods() : ?string
    {
        return $this->methods;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('routeId', $this->routeId);
        $record->put('allow', $this->allow);
        $record->put('methods', $this->methods);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

