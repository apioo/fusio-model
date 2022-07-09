<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Route implements \JsonSerializable
{
    protected ?Route_Path $routes = null;
    public function setRoutes(?Route_Path $routes) : void
    {
        $this->routes = $routes;
    }
    public function getRoutes() : ?Route_Path
    {
        return $this->routes;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('routes' => $this->routes), static function ($value) : bool {
            return $value !== null;
        });
    }
}

