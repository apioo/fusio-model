<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

#[Description('Payload used to activate a user account via token')]
class UserActivate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Account activation verification token')]
    protected ?string $token = null;
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('token', $this->token);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

