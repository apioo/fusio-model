<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a HTTP response')]
class HttpResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('HTTP status code')]
    protected ?int $statusCode = null;
    /**
     * @var \PSX\Record\Record<string>|null
     */
    #[Description('HTTP response headers')]
    protected ?\PSX\Record\Record $headers = null;
    #[Description('HTTP response body')]
    protected ?string $body = null;
    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
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

