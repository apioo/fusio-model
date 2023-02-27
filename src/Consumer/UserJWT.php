<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Key;

class UserJWT implements \JsonSerializable
{
    protected ?string $token = null;
    #[Key('expires_in')]
    protected ?int $expiresIn = null;
    #[Key('refresh_token')]
    protected ?string $refreshToken = null;
    protected ?string $scope = null;
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function setExpiresIn(?int $expiresIn) : void
    {
        $this->expiresIn = $expiresIn;
    }
    public function getExpiresIn() : ?int
    {
        return $this->expiresIn;
    }
    public function setRefreshToken(?string $refreshToken) : void
    {
        $this->refreshToken = $refreshToken;
    }
    public function getRefreshToken() : ?string
    {
        return $this->refreshToken;
    }
    public function setScope(?string $scope) : void
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('token' => $this->token, 'expires_in' => $this->expiresIn, 'refresh_token' => $this->refreshToken, 'scope' => $this->scope), static function ($value) : bool {
            return $value !== null;
        });
    }
}
