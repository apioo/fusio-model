<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

class Grant implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    protected ?int $id = null;
    protected ?App $app = null;
    protected ?\PSX\DateTime\LocalDateTime $createDate = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setApp(?App $app): void
    {
        $this->app = $app;
    }
    public function getApp(): ?App
    {
        return $this->app;
    }
    public function setCreateDate(?\PSX\DateTime\LocalDateTime $createDate): void
    {
        $this->createDate = $createDate;
    }
    public function getCreateDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->createDate;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('id', $this->id);
        $record->put('app', $this->app);
        $record->put('createDate', $this->createDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

