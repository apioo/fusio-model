<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents a collection of available tools')]
class AgentTools implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentTool>|null
     */
    protected ?array $tools = null;
    /**
     * @param array<AgentTool>|null $tools
     */
    public function setTools(?array $tools): void
    {
        $this->tools = $tools;
    }
    /**
     * @return array<AgentTool>|null
     */
    public function getTools(): ?array
    {
        return $this->tools;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('tools', $this->tools);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

