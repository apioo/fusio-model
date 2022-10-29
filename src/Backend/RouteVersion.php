<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class RouteVersion implements \JsonSerializable
{
    protected ?int $version = null;
    protected ?int $status = null;
    protected ?RouteMethods $methods = null;
    public function setVersion(?int $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?int
    {
        return $this->version;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setMethods(?RouteMethods $methods) : void
    {
        $this->methods = $methods;
    }
    public function getMethods() : ?RouteMethods
    {
        return $this->methods;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('version' => $this->version, 'status' => $this->status, 'methods' => $this->methods), static function ($value) : bool {
            return $value !== null;
        });
    }
}

