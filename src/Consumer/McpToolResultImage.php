<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class McpToolResultImage extends McpToolResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $type = null;
    protected ?string $data = null;
    protected ?string $mimeType = null;
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setData(?string $data): void
    {
        $this->data = $data;
    }
    public function getData(): ?string
    {
        return $this->data;
    }
    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('type', $this->type);
        $record->put('data', $this->data);
        $record->put('mimeType', $this->mimeType);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

