<?php

declare(strict_types = 1);

namespace Fusio\Model\System;

use PSX\Schema\Attribute\Description;

class Debug implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Map of HTTP headers captured during the debug request')]
    protected ?DebugHeaders $headers = null;
    #[Description('Map of query parameters passed with the debug request')]
    protected ?DebugParameters $parameters = null;
    #[Description('Payload body received during the debug request')]
    protected ?DebugBody $body = null;
    public function setHeaders(?DebugHeaders $headers): void
    {
        $this->headers = $headers;
    }
    public function getHeaders(): ?DebugHeaders
    {
        return $this->headers;
    }
    public function setParameters(?DebugParameters $parameters): void
    {
        $this->parameters = $parameters;
    }
    public function getParameters(): ?DebugParameters
    {
        return $this->parameters;
    }
    public function setBody(?DebugBody $body): void
    {
        $this->body = $body;
    }
    public function getBody(): ?DebugBody
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
        $record->put('headers', $this->headers);
        $record->put('parameters', $this->parameters);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

