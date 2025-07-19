<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents a request to execute an action')]
class ActionExecuteRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('HTTP method i.e. GET, POST')]
    protected ?string $method = null;
    #[Description('URL-encoded uri fragments i.e. foo=bar&bar=foo')]
    protected ?string $uriFragments = null;
    #[Description('URL-encoded query parameters i.e. foo=bar&bar=foo')]
    protected ?string $parameters = null;
    #[Description('URL-encoded headers i.e. foo=bar&bar=foo')]
    protected ?string $headers = null;
    #[Description('Request body of this execution')]
    protected ?ActionExecuteRequestBody $body = null;
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    public function getMethod(): ?string
    {
        return $this->method;
    }
    public function setUriFragments(?string $uriFragments): void
    {
        $this->uriFragments = $uriFragments;
    }
    public function getUriFragments(): ?string
    {
        return $this->uriFragments;
    }
    public function setParameters(?string $parameters): void
    {
        $this->parameters = $parameters;
    }
    public function getParameters(): ?string
    {
        return $this->parameters;
    }
    public function setHeaders(?string $headers): void
    {
        $this->headers = $headers;
    }
    public function getHeaders(): ?string
    {
        return $this->headers;
    }
    public function setBody(?ActionExecuteRequestBody $body): void
    {
        $this->body = $body;
    }
    public function getBody(): ?ActionExecuteRequestBody
    {
        return $this->body;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('method', $this->method);
        $record->put('uriFragments', $this->uriFragments);
        $record->put('parameters', $this->parameters);
        $record->put('headers', $this->headers);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

