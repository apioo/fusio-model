<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class EventSubscription implements \JsonSerializable
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
    public function getResponses() : ?array
    {
        return $this->responses;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'eventId' => $this->eventId, 'userId' => $this->userId, 'endpoint' => $this->endpoint, 'responses' => $this->responses), static function ($value) : bool {
            return $value !== null;
        });
    }
}

