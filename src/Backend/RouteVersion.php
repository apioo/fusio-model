<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class RouteVersion implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('version', $this->version);
        $record->put('status', $this->status);
        $record->put('methods', $this->methods);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

