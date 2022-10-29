<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Route implements \JsonSerializable
{
    protected ?RoutePath $routes = null;
    public function setRoutes(?RoutePath $routes) : void
    {
        $this->routes = $routes;
    }
    public function getRoutes() : ?RoutePath
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

