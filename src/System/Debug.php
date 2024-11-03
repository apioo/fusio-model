<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Debug implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $headers = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $parameters = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $body = null;
    /**
     * @param \PSX\Record\Record|null $headers
     */
    public function setHeaders(?\PSX\Record\Record $headers) : void
    {
        $this->headers = $headers;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getHeaders() : ?\PSX\Record\Record
    {
        return $this->headers;
    }
    /**
     * @param \PSX\Record\Record|null $parameters
     */
    public function setParameters(?\PSX\Record\Record $parameters) : void
    {
        $this->parameters = $parameters;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getParameters() : ?\PSX\Record\Record
    {
        return $this->parameters;
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
        $record->put('headers', $this->headers);
        $record->put('parameters', $this->parameters);
        $record->put('body', $this->body);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

