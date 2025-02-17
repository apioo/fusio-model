<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Key;

class UserJWT implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $token = null;
    #[Key('expires_in')]
    protected ?int $expiresIn = null;
    #[Key('refresh_token')]
    protected ?string $refreshToken = null;
    protected ?string $scope = null;
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }
    public function getToken(): ?string
    {
        return $this->token;
    }
    public function setExpiresIn(?int $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }
    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
    public function getScope(): ?string
    {
        return $this->scope;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('token', $this->token);
        $record->put('expires_in', $this->expiresIn);
        $record->put('refresh_token', $this->refreshToken);
        $record->put('scope', $this->scope);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

