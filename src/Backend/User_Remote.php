<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class User_Remote implements \JsonSerializable
{
    protected ?string $provider = null;
    protected ?string $remoteId = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_\\.]{3,32}$')]
    protected ?string $name = null;
    protected ?string $email = null;
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?string
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
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('provider' => $this->provider, 'remoteId' => $this->remoteId, 'name' => $this->name, 'email' => $this->email), static function ($value) : bool {
            return $value !== null;
        });
    }
}

