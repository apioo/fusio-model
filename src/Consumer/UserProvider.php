<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserProvider implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $code = null;
    protected ?string $clientId = null;
    protected ?string $redirectUri = null;
    public function setCode(?string $code) : void
    {
        $this->code = $code;
    }
    public function getCode() : ?string
    {
        return $this->code;
    }
    public function setClientId(?string $clientId) : void
    {
        $this->clientId = $clientId;
    }
    public function getClientId() : ?string
    {
        return $this->clientId;
    }
    public function setRedirectUri(?string $redirectUri) : void
    {
        $this->redirectUri = $redirectUri;
    }
    public function getRedirectUri() : ?string
    {
        return $this->redirectUri;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('code', $this->code);
        $record->put('clientId', $this->clientId);
        $record->put('redirectUri', $this->redirectUri);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

