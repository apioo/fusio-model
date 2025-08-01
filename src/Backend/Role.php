<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a role, every user is assigned to a role and all scopes of the role are automatically attached to the user')]
class Role implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('The assigned category id of this role')]
    protected ?int $categoryId = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    /**
     * @var array<string>|null
     */
    #[Description('All scopes which are assigned to this role')]
    protected ?array $scopes = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('categoryId', $this->categoryId);
        $record->put('name', $this->name);
        $record->put('scopes', $this->scopes);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

