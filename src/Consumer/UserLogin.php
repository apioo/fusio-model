<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class UserLogin implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $username = null;
    protected ?string $password = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    public function setUsername(?string $username) : void
    {
        $this->username = $username;
    }
    public function getUsername() : ?string
    {
        return $this->username;
    }
    public function setPassword(?string $password) : void
    {
        $this->password = $password;
    }
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('username', $this->username);
        $record->put('password', $this->password);
        $record->put('scopes', $this->scopes);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

