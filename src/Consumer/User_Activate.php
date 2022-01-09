<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('token'))]
class User_Activate implements \JsonSerializable
{
    protected ?string $token = null;
    public function setToken(?string $token) : void
    {
        $this->token = $token;
    }
    public function getToken() : ?string
    {
        return $this->token;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('token' => $this->token), static function ($value) : bool {
            return $value !== null;
        });
    }
}

