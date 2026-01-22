<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Tool call agent result')]
class AgentMessageToolCall extends AgentMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentMessageToolCallFunction>|null
     */
    #[Description('An array of concrete functions')]
    protected ?array $functions = null;
    /**
     * @param array<AgentMessageToolCallFunction>|null $functions
     */
    public function setFunctions(?array $functions): void
    {
        $this->functions = $functions;
    }
    /**
     * @return array<AgentMessageToolCallFunction>|null
     */
    public function getFunctions(): ?array
    {
        return $this->functions;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('functions', $this->functions);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

