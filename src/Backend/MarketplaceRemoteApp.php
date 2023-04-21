<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class MarketplaceRemoteApp extends MarketplaceApp implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?MarketplaceApp $local = null;
    public function setLocal(?MarketplaceApp $local) : void
    {
        $this->local = $local;
    }
    public function getLocal() : ?MarketplaceApp
    {
        return $this->local;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('local', $this->local);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

