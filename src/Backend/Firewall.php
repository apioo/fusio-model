<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a firewall rule which blocks specific IP addresses')]
class Firewall implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('The type of the rule either 1 = allow or 0 = deny')]
    protected ?int $type = null;
    #[Description('The target IP address')]
    protected ?string $ip = null;
    #[Description('The expire date')]
    protected ?\PSX\DateTime\LocalDateTime $expire = null;
    #[Description('Use this parameter to attach key-value data')]
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
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
    public function setType(?int $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?int
    {
        return $this->type;
    }
    public function setIp(?string $ip): void
    {
        $this->ip = $ip;
    }
    public function getIp(): ?string
    {
        return $this->ip;
    }
    public function setExpire(?\PSX\DateTime\LocalDateTime $expire): void
    {
        $this->expire = $expire;
    }
    public function getExpire(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->expire;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata(): ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('type', $this->type);
        $record->put('ip', $this->ip);
        $record->put('expire', $this->expire);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

