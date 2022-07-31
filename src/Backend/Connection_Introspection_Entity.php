<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Connection_Introspection_Entity implements \JsonSerializable
{
    protected ?string $name = null;
    /**
     * @var array<string>|null
     */
    protected ?array $headers = null;
    /**
     * @var array<Connection_Introspection_Entity_Row>|null
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
    public function getHeaders() : ?array
    {
        return $this->headers;
    }
    /**
     * @param array<Connection_Introspection_Entity_Row>|null $rows
     */
    public function setRows(?array $rows) : void
    {
        $this->rows = $rows;
    }
    public function getRows() : ?array
    {
        return $this->rows;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'headers' => $this->headers, 'rows' => $this->rows), static function ($value) : bool {
            return $value !== null;
        });
    }
}

