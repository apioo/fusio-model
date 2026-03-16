<?php

declare(strict_types = 1);

namespace Fusio\Model\Agent;

use PSX\Schema\Attribute\DerivedType;
use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Discriminator;

#[Description('Agent item')]
#[Discriminator('type')]
#[DerivedType(ItemBinary::class, 'binary')]
#[DerivedType(ItemChoice::class, 'choice')]
#[DerivedType(ItemObject::class, 'object')]
#[DerivedType(ItemText::class, 'text')]
#[DerivedType(ItemToolCall::class, 'tool_call')]
abstract class Item implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The result type')]
    protected ?string $type = null;
    /**
     * @var \PSX\Record\Record<mixed>|null
     */
    #[Description('Optional result metadata')]
    protected ?\PSX\Record\Record $metadata = null;
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * @param \PSX\Record\Record<mixed>|null $metadata
     */
    public function setMetadata(?\PSX\Record\Record $metadata): void
    {
        $this->metadata = $metadata;
    }
    /**
     * @return \PSX\Record\Record<mixed>|null
     */
    public function getMetadata(): ?\PSX\Record\Record
    {
        return $this->metadata;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

