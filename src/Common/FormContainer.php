<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Represents a config form with a list of elements')]
class FormContainer implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<FormElement>|null
     */
    protected ?array $element = null;
    /**
     * @param array<FormElement>|null $element
     */
    public function setElement(?array $element): void
    {
        $this->element = $element;
    }
    /**
     * @return array<FormElement>|null
     */
    public function getElement(): ?array
    {
        return $this->element;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('element', $this->element);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

