<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class AgentBlueprint implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentBlueprintOperation>|null
     */
    protected ?array $operations = null;
    protected ?string $schema = null;
    /**
     * @param array<AgentBlueprintOperation>|null $operations
     */
    public function setOperations(?array $operations): void
    {
        $this->operations = $operations;
    }
    /**
     * @return array<AgentBlueprintOperation>|null
     */
    public function getOperations(): ?array
    {
        return $this->operations;
    }
    public function setSchema(?string $schema): void
    {
        $this->schema = $schema;
    }
    public function getSchema(): ?string
    {
        return $this->schema;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('operations', $this->operations);
        $record->put('schema', $this->schema);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

