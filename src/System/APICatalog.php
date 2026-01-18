<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class APICatalog implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<APICatalogLinkSet>|null
     */
    protected ?array $linkset = null;
    /**
     * @param array<APICatalogLinkSet>|null $linkset
     */
    public function setLinkset(?array $linkset): void
    {
        $this->linkset = $linkset;
    }
    /**
     * @return array<APICatalogLinkSet>|null
     */
    public function getLinkset(): ?array
    {
        return $this->linkset;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('linkset', $this->linkset);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

