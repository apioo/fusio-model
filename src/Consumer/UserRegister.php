<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserRegister implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?string $captcha = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function setCaptcha(?string $captcha): void
    {
        $this->captcha = $captcha;
    }
    public function getCaptcha(): ?string
    {
        return $this->captcha;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('email', $this->email);
        $record->put('password', $this->password);
        $record->put('captcha', $this->captcha);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

