<?php

declare(strict_types = 1);

namespace Fusio\Model;


class CollectionCategoryQuery extends CollectionQuery implements \JsonSerializable
{
    protected ?int $categoryId = null;
    public function setCategoryId(?int $categoryId) : void
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('categoryId' => $this->categoryId), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

