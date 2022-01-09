<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Connection_Index implements \JsonSerializable
{
    /**
     * @var array<Connection_Index_Entry>|null
     */
    protected ?array $connections = null;
    /**
     * @param array<Connection_Index_Entry>|null $connections
     */
    public function setConnections(?array $connections) : void
    {
        $this->connections = $connections;
    }
    public function getConnections() : ?array
    {
        return $this->connections;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('connections' => $this->connections), static function ($value) : bool {
            return $value !== null;
        });
    }
}

