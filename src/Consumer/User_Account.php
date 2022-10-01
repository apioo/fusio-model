<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class User_Account implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $planId = null;
    protected ?int $status = null;
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?int $points = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
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
    public function setMetadata(?\Fusio\Model\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Metadata
    {
        return $this->metadata;
    }
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'planId' => $this->planId, 'status' => $this->status, 'name' => $this->name, 'email' => $this->email, 'points' => $this->points, 'scopes' => $this->scopes, 'metadata' => $this->metadata, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}

