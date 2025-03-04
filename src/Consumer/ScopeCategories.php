<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class ScopeCategories implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<ScopeCategory>|null
     */
    protected ?array $categories = null;
    /**
     * @param array<ScopeCategory>|null $categories
     */
    public function setCategories(?array $categories): void
    {
        $this->categories = $categories;
    }
    /**
     * @return array<ScopeCategory>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('categories', $this->categories);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

