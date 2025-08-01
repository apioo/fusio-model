<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a file on the filesystem')]
class File implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?string $id = null;
    #[Description('Name of the file')]
    protected ?string $name = null;
    #[Description('MIME type of the file')]
    protected ?string $contentType = null;
    #[Description('Checksum of the file')]
    protected ?string $checksum = null;
    #[Description('Last modified date of the file')]
    protected ?\PSX\DateTime\LocalDateTime $lastModified = null;
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setContentType(?string $contentType): void
    {
        $this->contentType = $contentType;
    }
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    public function setChecksum(?string $checksum): void
    {
        $this->checksum = $checksum;
    }
    public function getChecksum(): ?string
    {
        return $this->checksum;
    }
    public function setLastModified(?\PSX\DateTime\LocalDateTime $lastModified): void
    {
        $this->lastModified = $lastModified;
    }
    public function getLastModified(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->lastModified;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('contentType', $this->contentType);
        $record->put('checksum', $this->checksum);
        $record->put('lastModified', $this->lastModified);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

