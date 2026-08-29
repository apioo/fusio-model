<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

class SdkMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    protected ?bool $success = null;
    protected ?string $message = null;
    protected ?string $link = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setLink(?string $link): void
    {
        $this->link = $link;
    }
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('success', $this->success);
        $record->put('message', $this->message);
        $record->put('link', $this->link);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

