<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class GeneratorProviderChangelog implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<Schema>|null
     */
    protected ?array $schemas = null;
    /**
     * @var array<Action>|null
     */
    protected ?array $actions = null;
    /**
     * @var array<Operation>|null
     */
    protected ?array $operations = null;
    /**
     * @param array<Schema>|null $schemas
     */
    public function setSchemas(?array $schemas) : void
    {
        $this->schemas = $schemas;
    }
    /**
     * @return array<Schema>|null
     */
    public function getSchemas() : ?array
    {
        return $this->schemas;
    }
    /**
     * @param array<Action>|null $actions
     */
    public function setActions(?array $actions) : void
    {
        $this->actions = $actions;
    }
    /**
     * @return array<Action>|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param array<Operation>|null $operations
     */
    public function setOperations(?array $operations) : void
    {
        $this->operations = $operations;
    }
    /**
     * @return array<Operation>|null
     */
    public function getOperations() : ?array
    {
        return $this->operations;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('schemas', $this->schemas);
        $record->put('actions', $this->actions);
        $record->put('operations', $this->operations);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

