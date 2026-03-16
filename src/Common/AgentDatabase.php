<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class AgentDatabase implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentDatabaseTable>|null
     */
    protected ?array $tables = null;
    /**
     * @param array<AgentDatabaseTable>|null $tables
     */
    public function setTables(?array $tables): void
    {
        $this->tables = $tables;
    }
    /**
     * @return array<AgentDatabaseTable>|null
     */
    public function getTables(): ?array
    {
        return $this->tables;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('tables', $this->tables);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

