<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent output')]
class AgentOutput implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Available if the message was persisted')]
    protected ?string $id = null;
    #[Description('The output')]
    protected ?AgentContent $output = null;
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
    }
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
        $record->put('id', $this->id);
        $record->put('output', $this->output);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

