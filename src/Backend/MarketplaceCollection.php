<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?MarketplaceCollectionApps $apps = null;
    public function setApps(?MarketplaceCollectionApps $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?MarketplaceCollectionApps
    {
        return $this->apps;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('apps', $this->apps);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

