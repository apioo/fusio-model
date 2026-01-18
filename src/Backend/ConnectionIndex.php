<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains all possible classes which can be used at an connection as class')]
class ConnectionIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<ConnectionIndexEntry>|null
     */
    protected ?array $connections = null;
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
        $record->put('connections', $this->connections);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

