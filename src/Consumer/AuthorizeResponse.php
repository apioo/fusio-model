<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class AuthorizeResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $type = null;
    protected ?AuthorizeResponseToken $token = null;
    protected ?string $code = null;
    protected ?string $redirectUri = null;
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setToken(?AuthorizeResponseToken $token): void
    {
        $this->token = $token;
    }
    public function getToken(): ?AuthorizeResponseToken
    {
        return $this->token;
    }
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    public function getCode(): ?string
    {
        return $this->code;
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
        $record->put('token', $this->token);
        $record->put('code', $this->code);
        $record->put('redirectUri', $this->redirectUri);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

