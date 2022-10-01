<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class Schema implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,255}$')]
    protected ?string $name = null;
    protected ?Schema_Source $source = null;
    protected ?Schema_Form $form = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
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
    public function setSource(?Schema_Source $source) : void
    {
        $this->source = $source;
    }
    public function getSource() : ?Schema_Source
    {
        return $this->source;
    }
    public function setForm(?Schema_Form $form) : void
    {
        $this->form = $form;
    }
    public function getForm() : ?Schema_Form
    {
        return $this->form;
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
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'name' => $this->name, 'source' => $this->source, 'form' => $this->form, 'metadata' => $this->metadata), static function ($value) : bool {
            return $value !== null;
        });
    }
}

