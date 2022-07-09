<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Schema implements \JsonSerializable
{
    protected ?Schema_TypeSchema $schema = null;
    protected ?Schema_Form $form = null;
    public function setSchema(?Schema_TypeSchema $schema) : void
    {
        $this->schema = $schema;
    }
    public function getSchema() : ?Schema_TypeSchema
    {
        return $this->schema;
    }
    public function setForm(?Schema_Form $form) : void
    {
        $this->form = $form;
    }
    public function getForm() : ?Schema_Form
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

