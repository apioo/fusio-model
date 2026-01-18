<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Structured agent result')]
class AgentResultObject extends AgentResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The structured JSON payload')]
    protected mixed $payload = null;
    public function setPayload(mixed $payload): void
    {
        $this->payload = $payload;
    }
    public function getPayload(): mixed
    {
        return $this->payload;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('payload', $this->payload);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

