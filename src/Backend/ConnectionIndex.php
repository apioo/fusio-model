<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains all possible classes which can be used at an connection as class')]
class ConnectionIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    /**
     * @var array<ConnectionIndexEntry>|null
     */
    #[Description('List of available connection class entries')]
    protected ?array $connections = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * @param array<ConnectionIndexEntry>|null $connections
     */
    public function setConnections(?array $connections): void
    {
        $this->connections = $connections;
    }
    /**
     * @return array<ConnectionIndexEntry>|null
     */
    public function getConnections(): ?array
    {
        return $this->connections;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('connections', $this->connections);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

