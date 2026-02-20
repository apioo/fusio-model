<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Choice agent message')]
class AgentContentChoice extends AgentContent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<AgentContent>|null
     */
    #[Description('Contains multiple agent messages')]
    protected ?array $items = null;
    /**
     * @param array<AgentContent>|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }
    /**
     * @return array<AgentContent>|null
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

