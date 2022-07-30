<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Dashboard_User implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $status = null;
    protected ?string $name = null;
    protected ?\DateTime $date = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?string $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?string
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
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}

