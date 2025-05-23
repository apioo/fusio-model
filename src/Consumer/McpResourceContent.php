<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

class McpResourceContent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The URI of the resource')]
    protected ?string $uri = null;
    #[Description('Optional MIME type')]
    protected ?string $mimeType = null;
    #[Description('For text resources')]
    protected ?string $text = null;
    #[Description('For binary resources (base64 encoded)')]
    protected ?string $blob = null;
    public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }
    public function getUri(): ?string
    {
        return $this->uri;
    }
    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
    public function getText(): ?string
    {
        return $this->text;
    }
    public function setBlob(?string $blob): void
    {
        $this->blob = $blob;
    }
    public function getBlob(): ?string
    {
        return $this->blob;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('uri', $this->uri);
        $record->put('mimeType', $this->mimeType);
        $record->put('text', $this->text);
        $record->put('blob', $this->blob);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

