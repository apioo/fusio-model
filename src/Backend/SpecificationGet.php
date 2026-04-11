<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class SpecificationGet implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected mixed $spec = null;
    public function setSpec(mixed $spec): void
    {
        $this->spec = $spec;
    }
    public function getSpec(): mixed
    {
        return $this->spec;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('spec', $this->spec);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

