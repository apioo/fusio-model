<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Key;

class MarketplaceApp extends MarketplaceObject implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $screenshot = null;
    protected ?string $website = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?string $downloadUrl = null;
    #[Key('sha1Hash')]
    protected ?string $shaHash = null;
    public function setScreenshot(?string $screenshot) : void
    {
        $this->screenshot = $screenshot;
    }
    public function getScreenshot() : ?string
    {
        return $this->screenshot;
    }
    public function setWebsite(?string $website) : void
    {
        $this->website = $website;
    }
    public function getWebsite() : ?string
    {
        return $this->website;
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
    public function setDownloadUrl(?string $downloadUrl) : void
    {
        $this->downloadUrl = $downloadUrl;
    }
    public function getDownloadUrl() : ?string
    {
        return $this->downloadUrl;
    }
    public function setShaHash(?string $shaHash) : void
    {
        $this->shaHash = $shaHash;
    }
    public function getShaHash() : ?string
    {
        return $this->shaHash;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('screenshot', $this->screenshot);
        $record->put('website', $this->website);
        $record->put('scopes', $this->scopes);
        $record->put('downloadUrl', $this->downloadUrl);
        $record->put('sha1Hash', $this->shaHash);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

