<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Binary agent message')]
class AgentContentBinary extends AgentContent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The mime of the binary data')]
    protected ?string $mime = null;
    #[Description('The base64 encoded binary data')]
    protected ?string $data = null;
    public function setMime(?string $mime): void
    {
        $this->mime = $mime;
    }
    public function getMime(): ?string
    {
        return $this->mime;
    }
    public function setData(?string $data): void
    {
        $this->data = $data;
    }
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('mime', $this->mime);
        $record->put('data', $this->data);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

