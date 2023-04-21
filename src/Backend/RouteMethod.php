<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class RouteMethod implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $method = null;
    protected ?int $version = null;
    protected ?int $status = null;
    protected ?bool $active = null;
    protected ?bool $public = null;
    protected ?string $description = null;
    protected ?string $operationId = null;
    protected ?string $parameters = null;
    protected ?string $request = null;
    protected ?string $response = null;
    protected ?RouteMethodResponses $responses = null;
    protected ?string $action = null;
    protected ?int $costs = null;
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setVersion(?int $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?int
    {
        return $this->version;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setActive(?bool $active) : void
    {
        $this->active = $active;
    }
    public function getActive() : ?bool
    {
        return $this->active;
    }
    public function setPublic(?bool $public) : void
    {
        $this->public = $public;
    }
    public function getPublic() : ?bool
    {
        return $this->public;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    public function setParameters(?string $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setRequest(?string $request) : void
    {
        $this->request = $request;
    }
    public function getRequest() : ?string
    {
        return $this->request;
    }
    public function setResponse(?string $response) : void
    {
        $this->response = $response;
    }
    public function getResponse() : ?string
    {
        return $this->response;
    }
    public function setResponses(?RouteMethodResponses $responses) : void
    {
        $this->responses = $responses;
    }
    public function getResponses() : ?RouteMethodResponses
    {
        return $this->responses;
    }
    public function setAction(?string $action) : void
    {
        $this->action = $action;
    }
    public function getAction() : ?string
    {
        return $this->action;
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
        $record->put('method', $this->method);
        $record->put('version', $this->version);
        $record->put('status', $this->status);
        $record->put('active', $this->active);
        $record->put('public', $this->public);
        $record->put('description', $this->description);
        $record->put('operationId', $this->operationId);
        $record->put('parameters', $this->parameters);
        $record->put('request', $this->request);
        $record->put('response', $this->response);
        $record->put('responses', $this->responses);
        $record->put('action', $this->action);
        $record->put('costs', $this->costs);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

