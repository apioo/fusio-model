<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents an action execution response')]
class ActionExecuteResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('HTTP status code i.e. 200, 400, etc.')]
    protected ?int $statusCode = null;
    #[Description('The response header returned by the action')]
    protected ?ActionExecuteResponseHeaders $headers = null;
    #[Description('The response body returned by the action')]
    protected ?ActionExecuteResponseBody $body = null;
    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
    public function setHeaders(?ActionExecuteResponseHeaders $headers): void
    {
        $this->headers = $headers;
    }
    public function getHeaders(): ?ActionExecuteResponseHeaders
    {
        return $this->headers;
    }
    public function setBody(?ActionExecuteResponseBody $body): void
    {
        $this->body = $body;
    }
    public function getBody(): ?ActionExecuteResponseBody
    {
        return $this->body;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('statusCode', $this->statusCode);
        $record->put('headers', $this->headers);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

