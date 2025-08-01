<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an operation, an operation invokes an action in case a specific HTTP method and path was requested. It defines also schema information about the request and response payload')]
class Operation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Status of the object either 1 = active or 0 = deleted')]
    protected ?int $status = null;
    #[Description('Indicates whether the operation is active')]
    protected ?bool $active = null;
    #[Description('Indicates whether the operation is public, if false a user must provide an Authorization header with an Bearer access token')]
    protected ?bool $public = null;
    #[Description('Describes the stability of this operation 0 = deprecated, 1 = experimental, 2 = stable and 3 = legacy')]
    protected ?int $stability = null;
    #[Description('A short description of this operation, it should explain the operation in a simple and precise way')]
    protected ?string $description = null;
    #[Description('The target HTTP method i.e. GET or POST')]
    protected ?string $httpMethod = null;
    #[Description('The target HTTP path i.e. /foo or /product/:product_id')]
    protected ?string $httpPath = null;
    #[Description('The success HTTP code i.e. 200 or 201')]
    protected ?int $httpCode = null;
    #[Description('Unique name of the object. It is recommended to group your operations into logical units by using a dot i.e. product.getAll and product.insert which has also an effect on the automatically generated SDK')]
    protected ?string $name = null;
    #[Description('Describes available query parameters')]
    protected ?OperationParameters $parameters = null;
    #[Description('Describes the incoming request payload, this must contain a schema name')]
    protected ?string $incoming = null;
    #[Description('Describes the outgoing response payload, this must contain a schema name')]
    protected ?string $outgoing = null;
    #[Description('Describes error responses for i.e. client or server errors')]
    protected ?OperationThrows $throws = null;
    #[Description('The target action to invoke, this must contain an action name')]
    protected ?string $action = null;
    #[Description('Costs to invoke this operation. A user can only invoke this operation in case he has enough points')]
    protected ?int $costs = null;
    /**
     * @var array<string>|null
     */
    #[Description('Scopes which are required to invoke this operation')]
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

