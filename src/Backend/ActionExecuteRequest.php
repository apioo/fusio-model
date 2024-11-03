<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ActionExecuteRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $method = null;
    protected ?string $uriFragments = null;
    protected ?string $parameters = null;
    protected ?string $headers = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $body = null;
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setUriFragments(?string $uriFragments) : void
    {
        $this->uriFragments = $uriFragments;
    }
    public function getUriFragments() : ?string
    {
        return $this->uriFragments;
    }
    public function setParameters(?string $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?string
    {
        return $this->parameters;
    }
    public function setHeaders(?string $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?string
    {
        return $this->headers;
    }
    /**
     * @param \PSX\Record\Record|null $body
     */
    public function setBody(?\PSX\Record\Record $body) : void
    {
        $this->body = $body;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getBody() : ?\PSX\Record\Record
    {
        return $this->body;
    }
    public function toRecord() : \PSX\Record\RecordInterface
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
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

