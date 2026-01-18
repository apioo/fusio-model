<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Stream agent result')]
class AgentResultStream extends AgentResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<mixed>|null
     */
    #[Description('An array of events')]
    protected ?array $events = null;
    /**
     * @param array<mixed>|null $events
     */
    public function setEvents(?array $events): void
    {
        $this->events = $events;
    }
    /**
     * @return array<mixed>|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('events', $this->events);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

