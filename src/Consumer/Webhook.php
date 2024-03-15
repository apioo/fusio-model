<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Webhook implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $event = null;
    protected ?string $endpoint = null;
    /**
     * @var array<WebhookResponse>|null
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
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setEvent(?string $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
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
     * @param array<WebhookResponse>|null $responses
     */
    public function setResponses(?array $responses) : void
    {
        $this->responses = $responses;
    }
    /**
     * @return array<WebhookResponse>|null
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
        $record->put('status', $this->status);
        $record->put('event', $this->event);
        $record->put('endpoint', $this->endpoint);
        $record->put('responses', $this->responses);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

