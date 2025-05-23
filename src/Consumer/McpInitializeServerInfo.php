<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class McpInitializeServerInfo implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $version = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }
    public function getVersion(): ?string
    {
        return $this->version;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('version', $this->version);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

