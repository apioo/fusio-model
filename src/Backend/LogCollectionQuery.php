<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class LogCollectionQuery extends \Fusio\Model\CollectionQuery implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?\PSX\DateTime\LocalDateTime $from = null;
    protected ?\PSX\DateTime\LocalDateTime $to = null;
    protected ?int $operationId = null;
    protected ?int $appId = null;
    protected ?int $userId = null;
    protected ?string $ip = null;
    protected ?string $userAgent = null;
    protected ?string $method = null;
    protected ?string $path = null;
    protected ?string $header = null;
    protected ?string $body = null;
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
    public function setOperationId(?int $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?int
    {
        return $this->operationId;
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
    public function setIp(?string $ip) : void
    {
        $this->ip = $ip;
    }
    public function getIp() : ?string
    {
        return $this->ip;
    }
    public function setUserAgent(?string $userAgent) : void
    {
        $this->userAgent = $userAgent;
    }
    public function getUserAgent() : ?string
    {
        return $this->userAgent;
    }
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setHeader(?string $header) : void
    {
        $this->header = $header;
    }
    public function getHeader() : ?string
    {
        return $this->header;
    }
    public function setBody(?string $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?string
    {
        return $this->body;
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
        $record->put('operationId', $this->operationId);
        $record->put('appId', $this->appId);
        $record->put('userId', $this->userId);
        $record->put('ip', $this->ip);
        $record->put('userAgent', $this->userAgent);
        $record->put('method', $this->method);
        $record->put('path', $this->path);
        $record->put('header', $this->header);
        $record->put('body', $this->body);
        $record->put('search', $this->search);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

