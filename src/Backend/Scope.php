<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class Scope implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_\\.]{3,64}$')]
    protected ?string $name = null;
    protected ?string $description = null;
    /**
     * @var array<ScopeOperation>|null
     */
    protected ?array $operations = null;
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param array<ScopeOperation>|null $operations
     */
    public function setOperations(?array $operations) : void
    {
        $this->operations = $operations;
    }
    public function getOperations() : ?array
    {
        return $this->operations;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('operations', $this->operations);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

