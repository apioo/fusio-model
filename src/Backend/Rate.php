<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

class Rate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $priority = null;
    protected ?string $name = null;
    protected ?int $rateLimit = null;
    protected ?\PSX\DateTime\Duration $timespan = null;
    /**
     * @var array<RateAllocation>|null
     */
    protected ?array $allocation = null;
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setPriority(?int $priority) : void
    {
        $this->priority = $priority;
    }
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setRateLimit(?int $rateLimit) : void
    {
        $this->rateLimit = $rateLimit;
    }
    public function getRateLimit() : ?int
    {
        return $this->rateLimit;
    }
    public function setTimespan(?\PSX\DateTime\Duration $timespan) : void
    {
        $this->timespan = $timespan;
    }
    public function getTimespan() : ?\PSX\DateTime\Duration
    {
        return $this->timespan;
    }
    /**
     * @param array<RateAllocation>|null $allocation
     */
    public function setAllocation(?array $allocation) : void
    {
        $this->allocation = $allocation;
    }
    /**
     * @return array<RateAllocation>|null
     */
    public function getAllocation() : ?array
    {
        return $this->allocation;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('priority', $this->priority);
        $record->put('name', $this->name);
        $record->put('rateLimit', $this->rateLimit);
        $record->put('timespan', $this->timespan);
        $record->put('allocation', $this->allocation);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

