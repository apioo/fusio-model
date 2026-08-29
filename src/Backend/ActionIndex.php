<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains all possible classes which can be used at an action as class')]
class ActionIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    /**
     * @var array<ActionIndexEntry>|null
     */
    protected ?array $actions = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * @param array<ActionIndexEntry>|null $actions
     */
    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }
    /**
     * @return array<ActionIndexEntry>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('actions', $this->actions);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

