<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Deprecated;

#[Deprecated(true)]
class ConnectionIntrospectionEntities implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $entities = null;
    /**
     * @param array<string>|null $entities
     */
    public function setEntities(?array $entities): void
    {
        $this->entities = $entities;
    }
    /**
     * @return array<string>|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('entities', $this->entities);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

