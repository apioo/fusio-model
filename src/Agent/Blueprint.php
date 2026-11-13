<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('Blueprint defining operations and schemas for agent capabilities')]
class Blueprint implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<BlueprintOperation>|null
     */
    #[Description('Array of API or tool operations supported by the blueprint')]
    protected ?array $operations = null;
    #[Description('Textual description of app_ tables, columns, and foreign keys')]
    protected ?string $database = null;
    /**
     * @param array<BlueprintOperation>|null $operations
     */
    public function setOperations(?array $operations): void
    {
        $this->operations = $operations;
    }
    /**
     * @return array<BlueprintOperation>|null
     */
    public function getOperations(): ?array
    {
        return $this->operations;
    }
    public function setDatabase(?string $database): void
    {
        $this->database = $database;
    }
    public function getDatabase(): ?string
    {
        return $this->database;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('operations', $this->operations);
        $record->put('database', $this->database);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

