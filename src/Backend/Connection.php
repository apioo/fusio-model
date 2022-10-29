<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class Connection implements \JsonSerializable
{
    protected ?int $id = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,255}$')]
    protected ?string $name = null;
    protected ?string $class = null;
    protected ?ConnectionConfig $config = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
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
    public function setClass(?string $class) : void
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function setConfig(?ConnectionConfig $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?ConnectionConfig
    {
        return $this->config;
    }
    public function setMetadata(?\Fusio\Model\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Metadata
    {
        return $this->metadata;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'class' => $this->class, 'config' => $this->config, 'metadata' => $this->metadata), static function ($value) : bool {
            return $value !== null;
        });
    }
}

