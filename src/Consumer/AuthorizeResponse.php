<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class AuthorizeResponse implements \JsonSerializable
{
    protected ?string $type = null;
    protected ?AuthorizeResponseToken $token = null;
    protected ?string $code = null;
    protected ?string $redirectUri = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setToken(?AuthorizeResponseToken $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?AuthorizeResponseToken
    {
        return $this->token;
    }
    public function setCode(?string $code) : void
    {
        $this->code = $code;
    }
    public function getCode() : ?string
    {
        return $this->code;
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
        return (object) array_filter(array('type' => $this->type, 'token' => $this->token, 'code' => $this->code, 'redirectUri' => $this->redirectUri), static function ($value) : bool {
            return $value !== null;
        });
    }
}
