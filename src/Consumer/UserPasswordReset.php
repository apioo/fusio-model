<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserPasswordReset implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $token = null;
    protected ?string $newPassword = null;
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }
    public function getToken(): ?string
    {
        return $this->token;
    }
    public function setNewPassword(?string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('token', $this->token);
        $record->put('newPassword', $this->newPassword);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

