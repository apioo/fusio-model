<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent input')]
class AgentInput implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The input')]
    protected ?AgentContent $input = null;
    public function setInput(?AgentContent $input): void
    {
        $this->input = $input;
    }
    public function getInput(): ?AgentContent
    {
        return $this->input;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('input', $this->input);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

