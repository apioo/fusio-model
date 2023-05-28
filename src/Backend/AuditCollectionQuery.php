<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class AuditCollectionQuery extends \Fusio\Model\Common\CollectionQuery implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?\PSX\DateTime\LocalDateTime $from = null;
    protected ?\PSX\DateTime\LocalDateTime $to = null;
    protected ?int $appId = null;
    protected ?int $userId = null;
    protected ?string $event = null;
    protected ?string $ip = null;
    protected ?string $message = null;
    protected ?string $search = null;
    public function setFrom(?\PSX\DateTime\LocalDateTime $from) : void
    {
        $this->from = $from;
    }
    public function getFrom() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->from;
    }
    public function setTo(?\PSX\DateTime\LocalDateTime $to) : void
    {
        $this->to = $to;
    }
    public function getTo() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->to;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setUserId(?int $userId) : void
    {
        $this->userId = $userId;
    }
    public function getUserId() : ?int
    {
        return $this->userId;
    }
    public function setEvent(?string $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?string
    {
        return $this->event;
    }
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setMessage(?string $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?string
    {
        return $this->message;
    }
    public function setSearch(?string $search) : void
    {
        $this->search = $search;
    }
    public function getSearch() : ?string
    {
        return $this->search;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('from', $this->from);
        $record->put('to', $this->to);
        $record->put('appId', $this->appId);
        $record->put('userId', $this->userId);
        $record->put('event', $this->event);
        $record->put('ip', $this->ip);
        $record->put('message', $this->message);
        $record->put('search', $this->search);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

