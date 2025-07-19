<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents the business logic which can be executed either through an operation or cronjob')]
class Action implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Status of the object either 1 = active or 0 = deleted')]
    protected ?int $status = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('Underlying class of this action which handles the action logic')]
    protected ?string $class = null;
    #[Description('Whether to execute the action asynchronously, if true the action directly returns a 202 response and the action is executed later on in the background, useful for expensive operations')]
    protected ?bool $async = null;
    #[Description('Contains the action specific configuration')]
    protected ?ActionConfig $config = null;
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
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
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
    public function setAsync(?bool $async): void
    {
        $this->async = $async;
    }
    public function getAsync(): ?bool
    {
        return $this->async;
    }
    public function setConfig(?ActionConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?ActionConfig
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
        $record->put('status', $this->status);
        $record->put('name', $this->name);
        $record->put('class', $this->class);
        $record->put('async', $this->async);
        $record->put('config', $this->config);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

