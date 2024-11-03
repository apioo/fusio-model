<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $appId = null;
    protected ?int $roleId = null;
    protected ?string $name = null;
    protected ?string $icon = null;
    protected ?string $class = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $config = null;
    protected ?bool $allowCreate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setRoleId(?int $roleId) : void
    {
        $this->roleId = $roleId;
    }
    public function getRoleId() : ?int
    {
        return $this->roleId;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setIcon(?string $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    public function setClass(?string $class) : void
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    /**
     * @param \PSX\Record\Record|null $config
     */
    public function setConfig(?\PSX\Record\Record $config) : void
    {
        $this->config = $config;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getConfig() : ?\PSX\Record\Record
    {
        return $this->config;
    }
    public function setAllowCreate(?bool $allowCreate) : void
    {
        $this->allowCreate = $allowCreate;
    }
    public function getAllowCreate() : ?bool
    {
        return $this->allowCreate;
    }
    public function toRecord() : \PSX\Record\RecordInterface
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
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

