<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent output')]
class Output implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Chat id of this conversation')]
    protected ?string $id = null;
    protected ?Item $item = null;
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
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
        $record->put('id', $this->id);
        $record->put('item', $this->item);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

