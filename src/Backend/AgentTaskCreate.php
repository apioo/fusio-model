<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new agent task, the provided item is passed to the action of the agent')]
class AgentTaskCreate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The agent output which should be processed, i.e. a generated blueprint')]
    protected ?\Fusio\Model\Agent\Item $item = null;
    public function setItem(?\Fusio\Model\Agent\Item $item): void
    {
        $this->item = $item;
    }
    public function getItem(): ?\Fusio\Model\Agent\Item
    {
        return $this->item;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('item', $this->item);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

