<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

class McpResource implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the resource')]
    protected ?string $uri = null;
    #[Description('Human-readable name')]
    protected ?string $name = null;
    #[Description('Optional description')]
    protected ?string $description = null;
    #[Description('Optional MIME type')]
    protected ?string $mimeType = null;
    public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }
    public function getUri(): ?string
    {
        return $this->uri;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
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
        $record = new \PSX\Record\Record();
        $record->put('uri', $this->uri);
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('mimeType', $this->mimeType);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

