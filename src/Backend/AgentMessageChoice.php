<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Choice agent result')]
class AgentMessageChoice extends AgentMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentMessage>|null
     */
    #[Description('Contains multiple agent results')]
    protected ?array $items = null;
    /**
     * @param array<AgentMessage>|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }
    /**
     * @return array<AgentMessage>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('items', $this->items);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

