<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ConnectionIntrospectionEntity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    /**
     * @var array<string>|null
     */
    protected ?array $headers = null;
    /**
     * @var array<ConnectionIntrospectionEntityRow>|null
     */
    protected ?array $rows = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param array<string>|null $headers
     */
    public function setHeaders(?array $headers) : void
    {
        $this->headers = $headers;
    }
    /**
     * @return array<string>|null
     */
    public function getHeaders() : ?array
    {
        return $this->headers;
    }
    /**
     * @param array<ConnectionIntrospectionEntityRow>|null $rows
     */
    public function setRows(?array $rows) : void
    {
        $this->rows = $rows;
    }
    /**
     * @return array<ConnectionIntrospectionEntityRow>|null
     */
    public function getRows() : ?array
    {
        return $this->rows;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('headers', $this->headers);
        $record->put('rows', $this->rows);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

