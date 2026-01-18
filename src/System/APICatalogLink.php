<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class APICatalogLink implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $href = null;
    protected ?string $type = null;
    public function setHref(?string $href): void
    {
        $this->href = $href;
    }
    public function getHref(): ?string
    {
        return $this->href;
    }
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('href', $this->href);
        $record->put('type', $this->type);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

