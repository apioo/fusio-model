<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Tool call agent result')]
class AgentResultToolCall extends AgentResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentResultToolCallFunction>|null
     */
    #[Description('An array of functions to invoke')]
    protected ?array $functions = null;
    /**
     * @param array<AgentResultToolCallFunction>|null $functions
     */
    public function setFunctions(?array $functions): void
    {
        $this->functions = $functions;
    }
    /**
     * @return array<AgentResultToolCallFunction>|null
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

