<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Route implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?int $priority = null;
    protected ?string $path = null;
    protected ?string $controller = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    /**
     * @var array<Route_Version>|null
     */
    protected ?array $config = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setPriority(?int $priority) : void
    {
        $this->priority = $priority;
    }
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    public function setPath(?string $path) : void
    {
        $this->path = $path;
    }
    public function getPath() : ?string
    {
        return $this->path;
    }
    public function setController(?string $controller) : void
    {
        $this->controller = $controller;
    }
    public function getController() : ?string
    {
        return $this->controller;
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
    /**
     * @param array<Route_Version>|null $config
     */
    public function setConfig(?array $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?array
    {
        return $this->config;
    }
    public function setMetadata(?\Fusio\Model\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Metadata
    {
        return $this->metadata;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'priority' => $this->priority, 'path' => $this->path, 'controller' => $this->controller, 'scopes' => $this->scopes, 'config' => $this->config, 'metadata' => $this->metadata), static function ($value) : bool {
            return $value !== null;
        });
    }
}

