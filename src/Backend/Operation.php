<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Operation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?bool $active = null;
    protected ?bool $public = null;
    protected ?int $stability = null;
    protected ?string $description = null;
    protected ?string $httpMethod = null;
    protected ?string $httpPath = null;
    protected ?int $httpCode = null;
    protected ?string $name = null;
    protected ?OperationParameters $parameters = null;
    protected ?string $incoming = null;
    protected ?string $outgoing = null;
    protected ?OperationThrows $throws = null;
    protected ?string $action = null;
    protected ?int $costs = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
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
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }
    public function getActive(): ?bool
    {
        return $this->active;
    }
    public function setPublic(?bool $public): void
    {
        $this->public = $public;
    }
    public function getPublic(): ?bool
    {
        return $this->public;
    }
    public function setStability(?int $stability): void
    {
        $this->stability = $stability;
    }
    public function getStability(): ?int
    {
        return $this->stability;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setHttpMethod(?string $httpMethod): void
    {
        $this->httpMethod = $httpMethod;
    }
    public function getHttpMethod(): ?string
    {
        return $this->httpMethod;
    }
    public function setHttpPath(?string $httpPath): void
    {
        $this->httpPath = $httpPath;
    }
    public function getHttpPath(): ?string
    {
        return $this->httpPath;
    }
    public function setHttpCode(?int $httpCode): void
    {
        $this->httpCode = $httpCode;
    }
    public function getHttpCode(): ?int
    {
        return $this->httpCode;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setParameters(?OperationParameters $parameters): void
    {
        $this->parameters = $parameters;
    }
    public function getParameters(): ?OperationParameters
    {
        return $this->parameters;
    }
    public function setIncoming(?string $incoming): void
    {
        $this->incoming = $incoming;
    }
    public function getIncoming(): ?string
    {
        return $this->incoming;
    }
    public function setOutgoing(?string $outgoing): void
    {
        $this->outgoing = $outgoing;
    }
    public function getOutgoing(): ?string
    {
        return $this->outgoing;
    }
    public function setThrows(?OperationThrows $throws): void
    {
        $this->throws = $throws;
    }
    public function getThrows(): ?OperationThrows
    {
        return $this->throws;
    }
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    public function getAction(): ?string
    {
        return $this->action;
    }
    public function setCosts(?int $costs): void
    {
        $this->costs = $costs;
    }
    public function getCosts(): ?int
    {
        return $this->costs;
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
        $record->put('status', $this->status);
        $record->put('active', $this->active);
        $record->put('public', $this->public);
        $record->put('stability', $this->stability);
        $record->put('description', $this->description);
        $record->put('httpMethod', $this->httpMethod);
        $record->put('httpPath', $this->httpPath);
        $record->put('httpCode', $this->httpCode);
        $record->put('name', $this->name);
        $record->put('parameters', $this->parameters);
        $record->put('incoming', $this->incoming);
        $record->put('outgoing', $this->outgoing);
        $record->put('throws', $this->throws);
        $record->put('action', $this->action);
        $record->put('costs', $this->costs);
        $record->put('scopes', $this->scopes);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

