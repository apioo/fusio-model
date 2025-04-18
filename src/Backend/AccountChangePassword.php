<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class AccountChangePassword implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $oldPassword = null;
    protected ?string $newPassword = null;
    protected ?string $verifyPassword = null;
    public function setOldPassword(?string $oldPassword): void
    {
        $this->oldPassword = $oldPassword;
    }
    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }
    public function setNewPassword(?string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    public function setVerifyPassword(?string $verifyPassword): void
    {
        $this->verifyPassword = $verifyPassword;
    }
    public function getVerifyPassword(): ?string
    {
        return $this->verifyPassword;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('oldPassword', $this->oldPassword);
        $record->put('newPassword', $this->newPassword);
        $record->put('verifyPassword', $this->verifyPassword);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

