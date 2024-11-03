<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class GeneratorProvider implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $path = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?bool $public = null;
    /**
     * @var \PSX\Record\Record|null
     */
    protected ?\PSX\Record\Record $config = null;
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
    /**
     * @return array<string>|null
     */
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
    /**
     * @param \PSX\Record\Record|null $config
     */
    public function setConfig(?\PSX\Record\Record $config) : void
    {
        $this->config = $config;
    }
    /**
     * @return \PSX\Record\Record|null
     */
    public function getConfig() : ?\PSX\Record\Record
    {
        return $this->config;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('path', $this->path);
        $record->put('scopes', $this->scopes);
        $record->put('public', $this->public);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

