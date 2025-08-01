<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a HTTP request')]
class HttpRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('HTTP method i.e. GET, POST')]
    protected ?string $method = null;
    #[Description('HTTP request uri')]
    protected ?string $uri = null;
    /**
     * @var \PSX\Record\Record<string>|null
     */
    #[Description('HTTP request headers')]
    protected ?\PSX\Record\Record $headers = null;
    #[Description('HTTP request body')]
    protected ?string $body = null;
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    public function getMethod(): ?string
    {
        return $this->method;
    }
    public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * @param \PSX\Record\Record<string>|null $headers
     */
    public function setHeaders(?\PSX\Record\Record $headers): void
    {
        $this->headers = $headers;
    }
    /**
     * @return \PSX\Record\Record<string>|null
     */
    public function getHeaders(): ?\PSX\Record\Record
    {
        return $this->headers;
    }
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }
    public function getBody(): ?string
    {
        return $this->body;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('method', $this->method);
        $record->put('uri', $this->uri);
        $record->put('headers', $this->headers);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

