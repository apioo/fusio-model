<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a plan, a plan allows users to obtain points or in general subscribe to your app')]
class Plan implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Name of the plan')]
    protected ?string $name = null;
    #[Description('Short description of the plan')]
    protected ?string $description = null;
    #[Description('The price of this plan')]
    protected ?float $price = null;
    #[Description('The points which are assigned to the user on purchase')]
    protected ?int $points = null;
    #[Description('Whether the plan is one-time or periodically')]
    protected ?int $period = null;
    #[Description('An external id of a remote payment provider like Stripe')]
    protected ?string $externalId = null;
    /**
     * @var array<string>|null
     */
    #[Description('Scopes which are assigned dynamically to the user on purchase')]
    protected ?array $scopes = null;
    #[Description('Use this parameter to attach key-value data')]
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
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
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
        $record->put('externalId', $this->externalId);
        $record->put('scopes', $this->scopes);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

