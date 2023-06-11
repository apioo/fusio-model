<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;
use PSX\Schema\Attribute\Required;

#[Required(array('provider', 'remoteId', 'name'))]
class UserRemote implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $provider = null;
    protected ?string $remoteId = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_\\.]{3,32}$')]
    protected ?string $name = null;
    protected ?string $email = null;
    public function setProvider(?int $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?int
    {
        return $this->provider;
    }
    public function setRemoteId(?string $remoteId) : void
    {
        $this->remoteId = $remoteId;
    }
    public function getRemoteId() : ?string
    {
        return $this->remoteId;
    }
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('provider', $this->provider);
        $record->put('remoteId', $this->remoteId);
        $record->put('name', $this->name);
        $record->put('email', $this->email);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

