<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class McpToolResultText extends McpToolResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $type = null;
    protected ?string $text = null;
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
    public function getText(): ?string
    {
        return $this->text;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('type', $this->type);
        $record->put('text', $this->text);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

