<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent message')]
class Agent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('The origin of this message i.e. 1 = user, 2 = assistant or 3 = system')]
    protected ?int $origin = null;
    #[Description('The message')]
    protected ?AgentMessage $message = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setOrigin(?int $origin): void
    {
        $this->origin = $origin;
    }
    public function getOrigin(): ?int
    {
        return $this->origin;
    }
    public function setMessage(?AgentMessage $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?AgentMessage
    {
        return $this->message;
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
        $record->put('origin', $this->origin);
        $record->put('message', $this->message);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

