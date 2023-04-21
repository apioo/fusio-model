<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class HealthCheck implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?bool $healthy = null;
    protected ?string $error = null;
    public function setHealthy(?bool $healthy) : void
    {
        $this->healthy = $healthy;
    }
    public function getHealthy() : ?bool
    {
        return $this->healthy;
    }
    public function setError(?string $error) : void
    {
        $this->error = $error;
    }
    public function getError() : ?string
    {
        return $this->error;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('healthy', $this->healthy);
        $record->put('error', $this->error);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

