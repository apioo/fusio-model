<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceLocalApp extends MarketplaceApp implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?MarketplaceApp $remote = null;
    public function setRemote(?MarketplaceApp $remote) : void
    {
        $this->remote = $remote;
    }
    public function getRemote() : ?MarketplaceApp
    {
        return $this->remote;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('remote', $this->remote);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

