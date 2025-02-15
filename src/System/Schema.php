<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Schema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?SchemaTypeSchema $schema = null;
    protected ?SchemaForm $form = null;
    public function setSchema(?SchemaTypeSchema $schema): void
    {
        $this->schema = $schema;
    }
    public function getSchema(): ?SchemaTypeSchema
    {
        return $this->schema;
    }
    public function setForm(?SchemaForm $form): void
    {
        $this->form = $form;
    }
    public function getForm(): ?SchemaForm
    {
        return $this->form;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('schema', $this->schema);
        $record->put('form', $this->form);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

