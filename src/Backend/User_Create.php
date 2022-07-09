<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('roleId', 'status', 'name', 'email', 'password'))]
class User_Create extends User implements \JsonSerializable
{
    protected ?string $password = null;
    public function setPassword(?string $password) : void
    {
        $this->password = $password;
    }
    public function getPassword() : ?string
    {
        return $this->password;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('password' => $this->password), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

