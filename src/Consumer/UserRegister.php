<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'email', 'password'))]
class UserRegister implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?string $captcha = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function setPassword(?string $password) : void
    {
        $this->password = $password;
    }
    public function getPassword() : ?string
    {
        return $this->password;
    }
    public function setCaptcha(?string $captcha) : void
    {
        $this->captcha = $captcha;
    }
    public function getCaptcha() : ?string
    {
        return $this->captcha;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'email' => $this->email, 'password' => $this->password, 'captcha' => $this->captcha), static function ($value) : bool {
            return $value !== null;
        });
    }
}
