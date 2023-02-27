<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Key;

class MarketplaceApp implements \JsonSerializable
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('version' => $this->version, 'description' => $this->description, 'screenshot' => $this->screenshot, 'website' => $this->website, 'downloadUrl' => $this->downloadUrl, 'sha1Hash' => $this->shaHash, 'startUrl' => $this->startUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}

