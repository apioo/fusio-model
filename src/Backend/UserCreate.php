<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class UserCreate extends User implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $password = null;
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('password', $this->password);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

