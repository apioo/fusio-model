<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('event', 'endpoint'))]
class EventSubscriptionUpdate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $event = null;
    protected ?string $endpoint = null;
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('event', $this->event);
        $record->put('endpoint', $this->endpoint);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

