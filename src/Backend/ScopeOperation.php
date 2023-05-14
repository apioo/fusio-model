<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ScopeOperation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $operationId = null;
    protected ?bool $allow = null;
    protected ?string $methods = null;
    public function setOperationId(?int $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?int
    {
        return $this->operationId;
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
        $record->put('operationId', $this->operationId);
        $record->put('allow', $this->allow);
        $record->put('methods', $this->methods);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

