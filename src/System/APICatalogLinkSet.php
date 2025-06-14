<?php

declare(strict_types = 1);

namespace Fusio\Model\System;

use PSX\Schema\Attribute\Key;

class APICatalogLinkSet implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $anchor = null;
    /**
     * @var array<APICatalogLink>|null
     */
    #[Key('service-desc')]
    protected ?array $serviceDesc = null;
    /**
     * @var array<APICatalogLink>|null
     */
    #[Key('service-doc')]
    protected ?array $serviceDoc = null;
    /**
     * @var array<APICatalogLink>|null
     */
    #[Key('service-meta')]
    protected ?array $serviceMeta = null;
    /**
     * @var array<APICatalogLink>|null
     */
    protected ?array $status = null;
    public function setAnchor(?string $anchor): void
    {
        $this->anchor = $anchor;
    }
    public function getAnchor(): ?string
    {
        return $this->anchor;
    }
    /**
     * @param array<APICatalogLink>|null $serviceDesc
     */
    public function setServiceDesc(?array $serviceDesc): void
    {
        $this->serviceDesc = $serviceDesc;
    }
    /**
     * @return array<APICatalogLink>|null
     */
    public function getServiceDesc(): ?array
    {
        return $this->serviceDesc;
    }
    /**
     * @param array<APICatalogLink>|null $serviceDoc
     */
    public function setServiceDoc(?array $serviceDoc): void
    {
        $this->serviceDoc = $serviceDoc;
    }
    /**
     * @return array<APICatalogLink>|null
     */
    public function getServiceDoc(): ?array
    {
        return $this->serviceDoc;
    }
    /**
     * @param array<APICatalogLink>|null $serviceMeta
     */
    public function setServiceMeta(?array $serviceMeta): void
    {
        $this->serviceMeta = $serviceMeta;
    }
    /**
     * @return array<APICatalogLink>|null
     */
    public function getServiceMeta(): ?array
    {
        return $this->serviceMeta;
    }
    /**
     * @param array<APICatalogLink>|null $status
     */
    public function setStatus(?array $status): void
    {
        $this->status = $status;
    }
    /**
     * @return array<APICatalogLink>|null
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('anchor', $this->anchor);
        $record->put('service-desc', $this->serviceDesc);
        $record->put('service-doc', $this->serviceDoc);
        $record->put('service-meta', $this->serviceMeta);
        $record->put('status', $this->status);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

