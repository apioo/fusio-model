<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Response container for a generated schema code preview')]
class SchemaPreviewResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The formatted source code preview generated from the schema')]
    protected ?string $preview = null;
    public function setPreview(?string $preview): void
    {
        $this->preview = $preview;
    }
    public function getPreview(): ?string
    {
        return $this->preview;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('preview', $this->preview);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

