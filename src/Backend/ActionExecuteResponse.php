<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ActionExecuteResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $statusCode = null;
    protected ?ActionExecuteResponseHeaders $headers = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $body = null;
    public function setStatusCode(?int $statusCode) : void
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode() : ?int
    {
        return $this->statusCode;
    }
    public function setHeaders(?ActionExecuteResponseHeaders $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?ActionExecuteResponseHeaders
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
        $record->put('statusCode', $this->statusCode);
        $record->put('headers', $this->headers);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

