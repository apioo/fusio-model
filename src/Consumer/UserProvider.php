<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserProvider implements \JsonSerializable
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('code' => $this->code, 'clientId' => $this->clientId, 'redirectUri' => $this->redirectUri), static function ($value) : bool {
            return $value !== null;
        });
    }
}
