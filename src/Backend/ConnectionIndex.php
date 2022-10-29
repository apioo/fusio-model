<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ConnectionIndex implements \JsonSerializable
{
    /**
     * @var array<ConnectionIndexEntry>|null
     */
    protected ?array $connections = null;
    /**
     * @param array<ConnectionIndexEntry>|null $connections
     */
    public function setConnections(?array $connections) : void
    {
        $this->connections = $connections;
    }
    public function getConnections() : ?array
    {
        return $this->connections;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('connections' => $this->connections), static function ($value) : bool {
            return $value !== null;
        });
    }
}

