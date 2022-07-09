<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Dashboard_App implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?\DateTime $date = null;
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
        return (object) array_filter(array('name' => $this->name, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}

