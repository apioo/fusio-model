<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\DerivedType;
use PSX\Schema\Attribute\Discriminator;

#[Discriminator('type')]
#[DerivedType(McpToolResultText::class, 'text')]
#[DerivedType(McpToolResultImage::class, 'image')]
abstract class McpToolResult implements \JsonSerializable, \PSX\Record\RecordableInterface
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
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('text', $this->text);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

