<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('email'))]
class User_Email implements \JsonSerializable
{
    protected ?string $email = null;
    protected ?string $captcha = null;
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function setCaptcha(?string $captcha) : void
    {
        $this->captcha = $captcha;
    }
    public function getCaptcha() : ?string
    {
        return $this->captcha;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('email' => $this->email, 'captcha' => $this->captcha), static function ($value) : bool {
            return $value !== null;
        });
    }
}

