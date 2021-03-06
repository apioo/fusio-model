<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class User_Remote implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $provider;
    /**
     * @var string|null
     */
    protected $remoteId;
    /**
     * @var string|null
     * @Pattern("^[a-zA-Z0-9\-\_\.]{3,32}$")
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @param string|null $provider
     */
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return string|null
     */
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    /**
     * @param string|null $remoteId
     */
    public function setRemoteId(?string $remoteId) : void
    {
        $this->remoteId = $remoteId;
    }
    /**
     * @return string|null
     */
    public function getRemoteId() : ?string
    {
        return $this->remoteId;
    }
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $email
     */
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    /**
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('provider' => $this->provider, 'remoteId' => $this->remoteId, 'name' => $this->name, 'email' => $this->email), static function ($value) : bool {
            return $value !== null;
        });
    }
}
