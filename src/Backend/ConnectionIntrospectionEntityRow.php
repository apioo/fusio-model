<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Deprecated;

#[Deprecated(true)]
class ConnectionIntrospectionEntityRow implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $values = null;
    /**
     * @param array<string>|null $values
     */
    public function setValues(?array $values): void
    {
        $this->values = $values;
    }
    /**
     * @return array<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('values', $this->values);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

