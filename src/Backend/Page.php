<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Page implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var string|null
     */
    protected $slug;
    /**
     * @var string|null
     */
    protected $content;
    /**
     * @param int|null $id
     */
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param int|null $status
     */
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    /**
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug) : void
    {
        $this->slug = $slug;
    }
    /**
     * @return string|null
     */
    public function getSlug() : ?string
    {
        return $this->slug;
    }
    /**
     * @param string|null $content
     */
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    /**
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'title' => $this->title, 'slug' => $this->slug, 'content' => $this->content), static function ($value) : bool {
            return $value !== null;
        });
    }
}
