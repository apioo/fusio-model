<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Schema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $name = null;
    protected ?SchemaSource $source = null;
    protected ?SchemaForm $form = null;
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
    public function setSource(?SchemaSource $source): void
    {
        $this->source = $source;
    }
    public function getSource(): ?SchemaSource
    {
        return $this->source;
    }
    public function setForm(?SchemaForm $form): void
    {
        $this->form = $form;
    }
    public function getForm(): ?SchemaForm
    {
        return $this->form;
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
        $record->put('source', $this->source);
        $record->put('form', $this->form);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

