<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;


class FormElementSelectOption implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $key = null;
    protected ?string $value = null;
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    public function getKey(): ?string
    {
        return $this->key;
    }
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }
    public function getValue(): ?string
    {
        return $this->value;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('key', $this->key);
        $record->put('value', $this->value);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

