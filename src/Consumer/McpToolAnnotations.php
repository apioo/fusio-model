<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

#[Description('Optional hints about tool behavior')]
class McpToolAnnotations implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Human-readable title for the tool')]
    protected ?string $title = null;
    #[Description('If true, the tool does not modify its environment')]
    protected ?bool $readOnlyHint = null;
    #[Description('If true, the tool may perform destructive updates')]
    protected ?bool $destructiveHint = null;
    #[Description('If true, repeated calls with same args have no additional effect')]
    protected ?bool $idempotentHint = null;
    #[Description('If true, tool interacts with external entities')]
    protected ?bool $openWorldHint = null;
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setReadOnlyHint(?bool $readOnlyHint): void
    {
        $this->readOnlyHint = $readOnlyHint;
    }
    public function getReadOnlyHint(): ?bool
    {
        return $this->readOnlyHint;
    }
    public function setDestructiveHint(?bool $destructiveHint): void
    {
        $this->destructiveHint = $destructiveHint;
    }
    public function getDestructiveHint(): ?bool
    {
        return $this->destructiveHint;
    }
    public function setIdempotentHint(?bool $idempotentHint): void
    {
        $this->idempotentHint = $idempotentHint;
    }
    public function getIdempotentHint(): ?bool
    {
        return $this->idempotentHint;
    }
    public function setOpenWorldHint(?bool $openWorldHint): void
    {
        $this->openWorldHint = $openWorldHint;
    }
    public function getOpenWorldHint(): ?bool
    {
        return $this->openWorldHint;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('title', $this->title);
        $record->put('readOnlyHint', $this->readOnlyHint);
        $record->put('destructiveHint', $this->destructiveHint);
        $record->put('idempotentHint', $this->idempotentHint);
        $record->put('openWorldHint', $this->openWorldHint);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

