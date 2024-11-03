<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Schema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $schema = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $form = null;
    /**
     * @param \PSX\Record\Record|null $schema
     */
    public function setSchema(?\PSX\Record\Record $schema) : void
    {
        $this->schema = $schema;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getSchema() : ?\PSX\Record\Record
    {
        return $this->schema;
    }
    /**
     * @param \PSX\Record\Record|null $form
     */
    public function setForm(?\PSX\Record\Record $form) : void
    {
        $this->form = $form;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getForm() : ?\PSX\Record\Record
    {
        return $this->form;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('schema', $this->schema);
        $record->put('form', $this->form);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

