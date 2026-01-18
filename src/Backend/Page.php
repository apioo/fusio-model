<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a page at the developer portal')]
class Page implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Status of the object either 1 = visible, 2 = invisible or 0 = deleted')]
    protected ?int $status = null;
    #[Description('Title of the page')]
    protected ?string $title = null;
    #[Description('Slug of the page which gets dynamically generated from the title')]
    protected ?string $slug = null;
    #[Description('HTML content of this page')]
    protected ?string $content = null;
    #[Description('Use this parameter to attach key-value data')]
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
    }
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }
    public function getContent(): ?string
    {
        return $this->content;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata(): ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('status', $this->status);
        $record->put('title', $this->title);
        $record->put('slug', $this->slug);
        $record->put('content', $this->content);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

