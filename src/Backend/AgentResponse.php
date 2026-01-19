<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent response')]
class AgentResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The output')]
    protected ?AgentMessage $output = null;
    public function setOutput(?AgentMessage $output): void
    {
        $this->output = $output;
    }
    public function getOutput(): ?AgentMessage
    {
        return $this->output;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('output', $this->output);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

