<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\MaxLength;
use PSX\Schema\Attribute\MinLength;

class AccountChangePassword implements \JsonSerializable
{
    #[MinLength(8)]
    #[MaxLength(128)]
    protected ?string $oldPassword = null;
    #[MinLength(8)]
    #[MaxLength(128)]
    protected ?string $newPassword = null;
    #[MinLength(8)]
    #[MaxLength(128)]
    protected ?string $verifyPassword = null;
    public function setOldPassword(?string $oldPassword) : void
    {
        $this->oldPassword = $oldPassword;
    }
    public function getOldPassword() : ?string
    {
        return $this->oldPassword;
    }
    public function setNewPassword(?string $newPassword) : void
    {
        $this->newPassword = $newPassword;
    }
    public function getNewPassword() : ?string
    {
        return $this->newPassword;
    }
    public function setVerifyPassword(?string $verifyPassword) : void
    {
        $this->verifyPassword = $verifyPassword;
    }
    public function getVerifyPassword() : ?string
    {
        return $this->verifyPassword;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('oldPassword' => $this->oldPassword, 'newPassword' => $this->newPassword, 'verifyPassword' => $this->verifyPassword), static function ($value) : bool {
            return $value !== null;
        });
    }
}
