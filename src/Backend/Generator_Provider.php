<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Generator_Provider implements \JsonSerializable
{
    protected ?string $path = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?bool $public = null;
    protected ?Generator_Provider_Config $config = null;
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
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
    public function setPublic(?bool $public) : void
    {
        $this->public = $public;
    }
    public function getPublic() : ?bool
    {
        return $this->public;
    }
    public function setConfig(?Generator_Provider_Config $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?Generator_Provider_Config
    {
        return $this->config;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('path' => $this->path, 'scopes' => $this->scopes, 'public' => $this->public, 'config' => $this->config), static function ($value) : bool {
            return $value !== null;
        });
    }
}

