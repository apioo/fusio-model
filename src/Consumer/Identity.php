<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $icon = null;
    protected ?string $redirect = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    public function setRedirect(?string $redirect): void
    {
        $this->redirect = $redirect;
    }
    public function getRedirect(): ?string
    {
        return $this->redirect;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('icon', $this->icon);
        $record->put('redirect', $this->redirect);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

