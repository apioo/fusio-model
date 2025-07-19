<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an audit which is created every time something was changed at the system')]
class Audit implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    protected ?App $app = null;
    protected ?User $user = null;
    #[Description('Trigger event of this audit')]
    protected ?string $event = null;
    #[Description('IP which as issued the request')]
    protected ?string $ip = null;
    #[Description('Message of this audit event')]
    protected ?string $message = null;
    #[Description('Content of this adit event')]
    protected ?AuditObject $content = null;
    #[Description('Insert date of this audit event')]
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setApp(?App $app): void
    {
        $this->app = $app;
    }
    public function getApp(): ?App
    {
        return $this->app;
    }
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }
    public function getUser(): ?User
    {
        return $this->user;
    }
    public function setEvent(?string $event): void
    {
        $this->event = $event;
    }
    public function getEvent(): ?string
    {
        return $this->event;
    }
    public function setIp(?string $ip): void
    {
        $this->ip = $ip;
    }
    public function getIp(): ?string
    {
        return $this->ip;
    }
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setContent(?AuditObject $content): void
    {
        $this->content = $content;
    }
    public function getContent(): ?AuditObject
    {
        return $this->content;
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
        $record->put('app', $this->app);
        $record->put('user', $this->user);
        $record->put('event', $this->event);
        $record->put('ip', $this->ip);
        $record->put('message', $this->message);
        $record->put('content', $this->content);
        $record->put('date', $this->date);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

