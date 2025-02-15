<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Key;

class UserRefresh implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('refresh_token')]
    protected ?string $refreshToken = null;
    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('refresh_token', $this->refreshToken);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

