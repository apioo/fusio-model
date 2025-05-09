<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class AuthorizeMeta implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $url = null;
    /**
     * @var array<Scope>|null
     */
    protected ?array $scopes = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * @param array<Scope>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<Scope>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('url', $this->url);
        $record->put('scopes', $this->scopes);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

