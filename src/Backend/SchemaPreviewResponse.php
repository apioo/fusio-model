<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class SchemaPreviewResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $preview = null;
    public function setPreview(?string $preview): void
    {
        $this->preview = $preview;
    }
    public function getPreview(): ?string
    {
        return $this->preview;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('preview', $this->preview);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

