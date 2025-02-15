<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Log implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $ip = null;
    protected ?string $userAgent = null;
    protected ?string $method = null;
    protected ?string $path = null;
    protected ?string $header = null;
    protected ?string $body = null;
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    /**
     * @var array<LogError>|null
     */
    protected ?array $errors = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setIp(?string $ip): void
    {
        $this->ip = $ip;
    }
    public function getIp(): ?string
    {
        return $this->ip;
    }
    public function setUserAgent(?string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    public function getMethod(): ?string
    {
        return $this->method;
    }
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }
    public function getPath(): ?string
    {
        return $this->path;
    }
    public function setHeader(?string $header): void
    {
        $this->header = $header;
    }
    public function getHeader(): ?string
    {
        return $this->header;
    }
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }
    public function getBody(): ?string
    {
        return $this->body;
    }
    public function setDate(?\PSX\DateTime\LocalDateTime $date): void
    {
        $this->date = $date;
    }
    public function getDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->date;
    }
    /**
     * @param array<LogError>|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
    /**
     * @return array<LogError>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('ip', $this->ip);
        $record->put('userAgent', $this->userAgent);
        $record->put('method', $this->method);
        $record->put('path', $this->path);
        $record->put('header', $this->header);
        $record->put('body', $this->body);
        $record->put('date', $this->date);
        $record->put('errors', $this->errors);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

