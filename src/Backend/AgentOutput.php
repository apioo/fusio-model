<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent output')]
class AgentOutput implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The output')]
    protected ?AgentContent $output = null;
    public function setOutput(?AgentContent $output): void
    {
        $this->output = $output;
    }
    public function getOutput(): ?AgentContent
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

