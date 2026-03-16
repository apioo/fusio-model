<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent message')]
class AgentMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('The assigned chat id which can be used to load the complete conversation')]
    protected ?string $chatId = null;
    #[Description('The role of this message i.e. user, assistant or system')]
    protected ?string $role = null;
    #[Description('The message item')]
    protected ?\Fusio\Model\Agent\Item $item = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setChatId(?string $chatId): void
    {
        $this->chatId = $chatId;
    }
    public function getChatId(): ?string
    {
        return $this->chatId;
    }
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }
    public function getRole(): ?string
    {
        return $this->role;
    }
    public function setItem(?\Fusio\Model\Agent\Item $item): void
    {
        $this->item = $item;
    }
    public function getItem(): ?\Fusio\Model\Agent\Item
    {
        return $this->item;
    }
    public function setInsertDate(?\PSX\DateTime\LocalDateTime $insertDate): void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->insertDate;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('chatId', $this->chatId);
        $record->put('role', $this->role);
        $record->put('item', $this->item);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

