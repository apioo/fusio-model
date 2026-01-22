<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent request')]
class AgentRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The intent of this request i.e. to develop an action or a general request')]
    protected ?string $intent = null;
    #[Description('The input message')]
    protected ?AgentMessage $input = null;
    public function setIntent(?string $intent): void
    {
        $this->intent = $intent;
    }
    public function getIntent(): ?string
    {
        return $this->intent;
    }
    public function setInput(?AgentMessage $input): void
    {
        $this->input = $input;
    }
    public function getInput(): ?AgentMessage
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
        $record->put('intent', $this->intent);
        $record->put('input', $this->input);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

