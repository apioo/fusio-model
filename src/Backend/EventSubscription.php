<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class EventSubscription implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $eventId = null;
    protected ?int $userId = null;
    protected ?string $endpoint = null;
    /**
     * @var array<EventSubscriptionResponse>|null
     */
    protected ?array $responses = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setEventId(?int $eventId) : void
    {
        $this->eventId = $eventId;
    }
    public function getEventId() : ?int
    {
        return $this->eventId;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setEndpoint(?string $endpoint) : void
    {
        $this->endpoint = $endpoint;
    }
    public function getEndpoint() : ?string
    {
        return $this->endpoint;
    }
    /**
     * @param array<EventSubscriptionResponse>|null $responses
     */
    public function setResponses(?array $responses) : void
    {
        $this->responses = $responses;
    }
    /**
     * @return array<EventSubscriptionResponse>|null
     */
    public function getResponses() : ?array
    {
        return $this->responses;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('eventId', $this->eventId);
        $record->put('userId', $this->userId);
        $record->put('endpoint', $this->endpoint);
        $record->put('responses', $this->responses);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

