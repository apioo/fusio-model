<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent call response')]
class AgentResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The agent result')]
    protected ?AgentResult $result = null;
    public function setResult(?AgentResult $result): void
    {
        $this->result = $result;
    }
    public function getResult(): ?AgentResult
    {
        return $this->result;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('result', $this->result);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

