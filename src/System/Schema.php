<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Schema implements \JsonSerializable
{
    protected ?SchemaTypeSchema $schema = null;
    protected ?SchemaForm $form = null;
    public function setSchema(?SchemaTypeSchema $schema) : void
    {
        $this->schema = $schema;
    }
    public function getSchema() : ?SchemaTypeSchema
    {
        return $this->schema;
    }
    public function setForm(?SchemaForm $form) : void
    {
        $this->form = $form;
    }
    public function getForm() : ?SchemaForm
    {
        return $this->form;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('schema' => $this->schema, 'form' => $this->form), static function ($value) : bool {
            return $value !== null;
        });
    }
}

