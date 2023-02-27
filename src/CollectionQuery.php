<?php

declare(strict_types = 1);

namespace Fusio\Model;


class CollectionQuery implements \JsonSerializable
{
    protected ?int $startIndex = null;
    protected ?int $count = null;
    protected ?string $search = null;
    public function setStartIndex(?int $startIndex) : void
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    public function setCount(?int $count) : void
    {
        $this->count = $count;
    }
    public function getCount() : ?int
    {
        return $this->count;
    }
    public function setSearch(?string $search) : void
    {
        $this->search = $search;
    }
    public function getSearch() : ?string
    {
        return $this->search;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('startIndex' => $this->startIndex, 'count' => $this->count, 'search' => $this->search), static function ($value) : bool {
            return $value !== null;
        });
    }
}
