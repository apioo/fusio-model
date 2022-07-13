<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Generator_Config implements \JsonSerializable
{
    protected ?int $connection = null;
    protected ?string $path = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    public function setConnection(?int $connection) : void
    {
        $this->connection = $connection;
    }
    public function getConnection() : ?int
    {
        return $this->connection;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('connection' => $this->connection, 'path' => $this->path, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}

