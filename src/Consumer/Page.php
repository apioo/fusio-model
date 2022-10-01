<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Page implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $title = null;
    protected ?string $slug = null;
    protected ?string $content = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setSlug(?string $slug) : void
    {
        $this->slug = $slug;
    }
    public function getSlug() : ?string
    {
        return $this->slug;
    }
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function setMetadata(?\Fusio\Model\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Metadata
    {
        return $this->metadata;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'title' => $this->title, 'slug' => $this->slug, 'content' => $this->content, 'metadata' => $this->metadata), static function ($value) : bool {
            return $value !== null;
        });
    }
}

