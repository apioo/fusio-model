<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Scope_Category_Scope implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $description = null;
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'description' => $this->description), static function ($value) : bool {
            return $value !== null;
        });
    }
}

