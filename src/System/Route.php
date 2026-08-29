<?php

declare(strict_types = 1);

namespace Fusio\Model\System;

use PSX\Schema\Attribute\Description;

class Route implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    #[Description('Mapping of API endpoint paths to their supported HTTP methods and handlers')]
    protected ?RoutePath $routes = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
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
        $record->put('kind', $this->kind);
        $record->put('routes', $this->routes);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

