<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a token, this an access token which was requested by a user')]
class Token implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Status of the object either 1 = active or 2 = deleted')]
    protected ?int $status = null;
    protected ?string $name = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?string $ip = null;
    protected ?\PSX\DateTime\LocalDateTime $expire = null;
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
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
    public function setDate(?\PSX\DateTime\LocalDateTime $date): void
    {
        $this->date = $date;
    }
    public function getDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->date;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('status', $this->status);
        $record->put('name', $this->name);
        $record->put('scopes', $this->scopes);
        $record->put('ip', $this->ip);
        $record->put('expire', $this->expire);
        $record->put('date', $this->date);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

