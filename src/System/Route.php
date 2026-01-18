<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Route implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?RoutePath $routes = null;
    public function setRoutes(?RoutePath $routes): void
    {
        $this->routes = $routes;
    }
    public function getRoutes(): ?RoutePath
    {
        return $this->routes;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('routes', $this->routes);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

