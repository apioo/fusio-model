<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Form implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $action = null;
    protected ?string $method = null;
    protected mixed $jsonSchema = null;
    protected mixed $uiSchema = null;
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
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    public function getAction(): ?string
    {
        return $this->action;
    }
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    public function getMethod(): ?string
    {
        return $this->method;
    }
    public function setJsonSchema(mixed $jsonSchema): void
    {
        $this->jsonSchema = $jsonSchema;
    }
    public function getJsonSchema(): mixed
    {
        return $this->jsonSchema;
    }
    public function setUiSchema(mixed $uiSchema): void
    {
        $this->uiSchema = $uiSchema;
    }
    public function getUiSchema(): mixed
    {
        return $this->uiSchema;
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
        $record->put('action', $this->action);
        $record->put('method', $this->method);
        $record->put('jsonSchema', $this->jsonSchema);
        $record->put('uiSchema', $this->uiSchema);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

