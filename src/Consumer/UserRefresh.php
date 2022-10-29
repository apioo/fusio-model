<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Key;

class UserRefresh implements \JsonSerializable
{
    #[Key('refresh_token')]
    protected ?string $refreshToken = null;
    public function setRefreshToken(?string $refreshToken) : void
    {
        $this->refreshToken = $refreshToken;
    }
    public function getRefreshToken() : ?string
    {
        return $this->refreshToken;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('refresh_token' => $this->refreshToken), static function ($value) : bool {
            return $value !== null;
        });
    }
}

