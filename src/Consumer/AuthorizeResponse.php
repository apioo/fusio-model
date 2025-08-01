<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class AuthorizeResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $type = null;
    protected ?string $code = null;
    protected ?string $error = null;
    protected ?string $state = null;
    protected ?string $redirectUri = null;
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    public function getCode(): ?string
    {
        return $this->code;
    }
    public function setError(?string $error): void
    {
        $this->error = $error;
    }
    public function getError(): ?string
    {
        return $this->error;
    }
    public function setState(?string $state): void
    {
        $this->state = $state;
    }
    public function getState(): ?string
    {
        return $this->state;
    }
    public function setRedirectUri(?string $redirectUri): void
    {
        $this->redirectUri = $redirectUri;
    }
    public function getRedirectUri(): ?string
    {
        return $this->redirectUri;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('code', $this->code);
        $record->put('error', $this->error);
        $record->put('state', $this->state);
        $record->put('redirectUri', $this->redirectUri);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

