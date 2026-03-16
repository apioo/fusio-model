<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent input')]
class Input implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Optional the chat id of this conversation')]
    protected ?string $previousId = null;
    protected ?Item $item = null;
    public function setPreviousId(?string $previousId): void
    {
        $this->previousId = $previousId;
    }
    public function getPreviousId(): ?string
    {
        return $this->previousId;
    }
    public function setItem(?Item $item): void
    {
        $this->item = $item;
    }
    public function getItem(): ?Item
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
        $record->put('previousId', $this->previousId);
        $record->put('item', $this->item);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

