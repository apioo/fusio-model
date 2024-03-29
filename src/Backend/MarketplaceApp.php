<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Key;

class MarketplaceApp implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $version = null;
    protected ?string $description = null;
    protected ?string $screenshot = null;
    protected ?string $website = null;
    protected ?string $downloadUrl = null;
    #[Key('sha1Hash')]
    protected ?string $shaHash = null;
    protected ?string $startUrl = null;
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
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
    public function setStartUrl(?string $startUrl) : void
    {
        $this->startUrl = $startUrl;
    }
    public function getStartUrl() : ?string
    {
        return $this->startUrl;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('version', $this->version);
        $record->put('description', $this->description);
        $record->put('screenshot', $this->screenshot);
        $record->put('website', $this->website);
        $record->put('downloadUrl', $this->downloadUrl);
        $record->put('sha1Hash', $this->shaHash);
        $record->put('startUrl', $this->startUrl);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

