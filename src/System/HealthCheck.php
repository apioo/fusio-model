<?php

declare(strict_types = 1);

namespace Fusio\Model\System;

use PSX\Schema\Attribute\Description;

class HealthCheck implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    protected ?bool $healthy = null;
    protected ?string $error = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    public function setHealthy(?bool $healthy): void
    {
        $this->healthy = $healthy;
    }
    public function getHealthy(): ?bool
    {
        return $this->healthy;
    }
    public function setError(?string $error): void
    {
        $this->error = $error;
    }
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('healthy', $this->healthy);
        $record->put('error', $this->error);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

