<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserPlan implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?int $price = null;
    protected ?int $points = null;
    protected ?int $period = null;
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
    public function setPrice(?int $price) : void
    {
        $this->price = $price;
    }
    public function getPrice() : ?int
    {
        return $this->price;
    }
    public function setPoints(?int $points) : void
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
    }
    public function setPeriod(?int $period) : void
    {
        $this->period = $period;
    }
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'price' => $this->price, 'points' => $this->points, 'period' => $this->period), static function ($value) : bool {
            return $value !== null;
        });
    }
}

