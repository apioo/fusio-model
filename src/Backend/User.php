<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class User implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $roleId = null;
    protected ?int $planId = null;
    protected ?int $status = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_\\.]{3,32}$')]
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?int $points = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    /**
     * @var array<App>|null
     */
    protected ?array $apps = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setRoleId(?int $roleId) : void
    {
        $this->roleId = $roleId;
    }
    public function getRoleId() : ?int
    {
        return $this->roleId;
    }
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function setPoints(?int $points) : void
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    /**
     * @param array<App>|null $apps
     */
    public function setApps(?array $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?array
    {
        return $this->apps;
    }
    public function setMetadata(?\Fusio\Model\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Metadata
    {
        return $this->metadata;
    }
    public function setDate(?\PSX\DateTime\LocalDateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->date;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('roleId', $this->roleId);
        $record->put('planId', $this->planId);
        $record->put('status', $this->status);
        $record->put('name', $this->name);
        $record->put('email', $this->email);
        $record->put('points', $this->points);
        $record->put('scopes', $this->scopes);
        $record->put('apps', $this->apps);
        $record->put('metadata', $this->metadata);
        $record->put('date', $this->date);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

