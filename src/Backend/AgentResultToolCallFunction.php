<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('A tool call function')]
class AgentResultToolCallFunction implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $id = null;
    protected ?string $type = null;
    protected ?AgentResultToolCallFunctionDetails $function = null;
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
    }
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setFunction(?AgentResultToolCallFunctionDetails $function): void
    {
        $this->function = $function;
    }
    public function getFunction(): ?AgentResultToolCallFunctionDetails
    {
        return $this->function;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('type', $this->type);
        $record->put('function', $this->function);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

