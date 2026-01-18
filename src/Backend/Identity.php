<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an identity which allows to authenticate with a remote identity provider')]
class Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('The target app for this identity')]
    protected ?int $appId = null;
    #[Description('Role which is assigned to new users')]
    protected ?int $roleId = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('An icon for this identity provider')]
    protected ?string $icon = null;
    #[Description('Underlying class of this identity provider')]
    protected ?string $class = null;
    protected ?IdentityConfig $config = null;
    protected ?bool $allowCreate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setAppId(?int $appId): void
    {
        $this->appId = $appId;
    }
    public function getAppId(): ?int
    {
        return $this->appId;
    }
    public function setRoleId(?int $roleId): void
    {
        $this->roleId = $roleId;
    }
    public function getRoleId(): ?int
    {
        return $this->roleId;
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
    public function setClass(?string $class): void
    {
        $this->class = $class;
    }
    public function getClass(): ?string
    {
        return $this->class;
    }
    public function setConfig(?IdentityConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?IdentityConfig
    {
        return $this->config;
    }
    public function setAllowCreate(?bool $allowCreate): void
    {
        $this->allowCreate = $allowCreate;
    }
    public function getAllowCreate(): ?bool
    {
        return $this->allowCreate;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('appId', $this->appId);
        $record->put('roleId', $this->roleId);
        $record->put('name', $this->name);
        $record->put('icon', $this->icon);
        $record->put('class', $this->class);
        $record->put('config', $this->config);
        $record->put('allowCreate', $this->allowCreate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

