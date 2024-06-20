<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceObject implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $version = null;
    protected ?string $icon = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?string $author = null;
    protected ?bool $verified = null;
    protected ?int $costs = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function setIcon(?string $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setAuthor(?string $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    public function setVerified(?bool $verified) : void
    {
        $this->verified = $verified;
    }
    public function getVerified() : ?bool
    {
        return $this->verified;
    }
    public function setCosts(?int $costs) : void
    {
        $this->costs = $costs;
    }
    public function getCosts() : ?int
    {
        return $this->costs;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('version', $this->version);
        $record->put('icon', $this->icon);
        $record->put('summary', $this->summary);
        $record->put('description', $this->description);
        $record->put('author', $this->author);
        $record->put('verified', $this->verified);
        $record->put('costs', $this->costs);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

