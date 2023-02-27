<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('event', 'endpoint'))]
class EventSubscriptionUpdate implements \JsonSerializable
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('event' => $this->event, 'endpoint' => $this->endpoint), static function ($value) : bool {
            return $value !== null;
        });
    }
}
