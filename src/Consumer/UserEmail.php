<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserEmail implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $email = null;
    protected ?string $captcha = null;
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): ?string
    {
        return $this->email;
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
        $record->put('email', $this->email);
        $record->put('captcha', $this->captcha);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

