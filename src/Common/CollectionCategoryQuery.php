<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class CollectionCategoryQuery extends CollectionQuery implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('categoryId', $this->categoryId);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

