<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ScopeCategories implements \JsonSerializable
{
    /**
     * @var array<ScopeCategory>|null
     */
    protected ?array $categories = null;
    /**
     * @param array<ScopeCategory>|null $categories
     */
    public function setCategories(?array $categories) : void
    {
        $this->categories = $categories;
    }
    public function getCategories() : ?array
    {
        return $this->categories;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('categories' => $this->categories), static function ($value) : bool {
            return $value !== null;
        });
    }
}

