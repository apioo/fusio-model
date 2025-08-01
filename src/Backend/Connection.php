<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('This object represents a connection to an external system like i.e. a database, message-queue or client-sdk')]
class Connection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('Underlying class of this connection which returns a configured client connection i.e. database, message-queue or client-sdk')]
    protected ?string $class = null;
    #[Key('oauth2')]
    #[Description('Indicates whether it is possible to start an OAuth2 authorization code flow on this connection')]
    protected ?bool $oauth = null;
    #[Description('Contains the connection specific configuration')]
    protected ?ConnectionConfig $config = null;
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
    public function setClass(?string $class): void
    {
        $this->class = $class;
    }
    public function getClass(): ?string
    {
        return $this->class;
    }
    public function setOauth(?bool $oauth): void
    {
        $this->oauth = $oauth;
    }
    public function getOauth(): ?bool
    {
        return $this->oauth;
    }
    public function setConfig(?ConnectionConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?ConnectionConfig
    {
        return $this->config;
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
        $record->put('class', $this->class);
        $record->put('oauth2', $this->oauth);
        $record->put('config', $this->config);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

