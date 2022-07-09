<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Authorize_Meta implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $url = null;
    /**
     * @var array<Scope>|null
     */
    protected ?array $scopes = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param array<Scope>|null $scopes
     */
    public function setScopes(?array $scopes) : void
    {
        $this->scopes = $scopes;
    }
    public function getScopes() : ?array
    {
        return $this->scopes;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'url' => $this->url, 'scopes' => $this->scopes), static function ($value) : bool {
            return $value !== null;
        });
    }
}

