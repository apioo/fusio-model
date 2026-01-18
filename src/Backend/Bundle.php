<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a bundle which contains action, schema, event, cronjob and trigger configurations from you local instance')]
class Bundle implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('Version of this bundle')]
    protected ?string $version = null;
    #[Description('Icon to represent this bundle')]
    protected ?string $icon = null;
    #[Description('Short summary which explains the use case for this bundle')]
    protected ?string $summary = null;
    #[Description('Long description how to use this bundle may also contains markdown syntax')]
    protected ?string $description = null;
    #[Description('Optional a cost for this bundle')]
    protected ?int $cost = null;
    #[Description('The bundle configuration')]
    protected ?BundleConfig $config = null;
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
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }
    public function getVersion(): ?string
    {
        return $this->version;
    }
    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    public function setSummary(?string $summary): void
    {
        $this->summary = $summary;
    }
    public function getSummary(): ?string
    {
        return $this->summary;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setCost(?int $cost): void
    {
        $this->cost = $cost;
    }
    public function getCost(): ?int
    {
        return $this->cost;
    }
    public function setConfig(?BundleConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?BundleConfig
    {
        return $this->config;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('version', $this->version);
        $record->put('icon', $this->icon);
        $record->put('summary', $this->summary);
        $record->put('description', $this->description);
        $record->put('cost', $this->cost);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

