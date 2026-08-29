<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

#[Description('Grouped list of scope categories for user authorization forms')]
class ScopeCategories implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    /**
     * @var array<ScopeCategory>|null
     */
    #[Description('List of scope category definitions')]
    protected ?array $categories = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
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
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('categories', $this->categories);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

