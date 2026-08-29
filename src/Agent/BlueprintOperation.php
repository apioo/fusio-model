<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\Description;

#[Description('An operational endpoint exposed within a blueprint')]
class BlueprintOperation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique name of the operation')]
    protected ?string $name = null;
    #[Description('Indicates whether the operation is publicly accessible')]
    protected ?bool $public = null;
    #[Description('A description of the operation purpose and functionality')]
    protected ?string $description = null;
    #[Description('The HTTP verb assigned to this operation (e.g., GET, POST)')]
    protected ?string $httpMethod = null;
    #[Description('The endpoint URL path pattern')]
    protected ?string $httpPath = null;
    #[Description('Expected successful HTTP response status code')]
    protected ?int $httpCode = null;
    /**
     * @var array<BlueprintOperationParameter>|null
     */
    #[Description('List of input parameters accepted by this operation')]
    protected ?array $parameters = null;
    #[Description('Reference schema for the incoming request payload')]
    protected ?string $incoming = null;
    #[Description('Reference schema for the outgoing response payload')]
    protected ?string $outgoing = null;
    #[Description('The execution logic or backend action handler assigned to this operation')]
    protected ?string $action = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setPublic(?bool $public): void
    {
        $this->public = $public;
    }
    public function getPublic(): ?bool
    {
        return $this->public;
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
    /**
     * @param array<BlueprintOperationParameter>|null $parameters
     */
    public function setParameters(?array $parameters): void
    {
        $this->parameters = $parameters;
    }
    /**
     * @return array<BlueprintOperationParameter>|null
     */
    public function getParameters(): ?array
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
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('public', $this->public);
        $record->put('description', $this->description);
        $record->put('httpMethod', $this->httpMethod);
        $record->put('httpPath', $this->httpPath);
        $record->put('httpCode', $this->httpCode);
        $record->put('parameters', $this->parameters);
        $record->put('incoming', $this->incoming);
        $record->put('outgoing', $this->outgoing);
        $record->put('action', $this->action);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

