<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Plan implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $description = null;
    protected ?float $price = null;
    protected ?int $points = null;
    protected ?int $period = null;
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }
    public function getPrice(): ?float
    {
        return $this->price;
    }
    public function setPoints(?int $points): void
    {
        $this->points = $points;
    }
    public function getPoints(): ?int
    {
        return $this->points;
    }
    public function setPeriod(?int $period): void
    {
        $this->period = $period;
    }
    public function getPeriod(): ?int
    {
        return $this->period;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata(): ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('price', $this->price);
        $record->put('points', $this->points);
        $record->put('period', $this->period);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

