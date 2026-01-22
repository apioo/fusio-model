<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents a textarea')]
class FormElementTextArea extends FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Describes which data is provided at the textarea, this can be i.e. a programming language like php, java or python or also a data format like json')]
    protected ?string $mode = null;
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('mode', $this->mode);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

