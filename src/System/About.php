<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class About implements \JsonSerializable
{
    protected ?string $apiVersion = null;
    protected ?string $title = null;
    protected ?string $description = null;
    protected ?string $termsOfService = null;
    protected ?string $contactName = null;
    protected ?string $contactUrl = null;
    protected ?string $contactEmail = null;
    protected ?string $licenseName = null;
    protected ?string $licenseUrl = null;
    /**
     * @var array<string>|null
     */
    protected ?array $categories = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    protected ?About_Apps $apps = null;
    /**
     * @var array<About_Link>|null
     */
    protected ?array $links = null;
    public function setApiVersion(?string $apiVersion) : void
    {
        $this->apiVersion = $apiVersion;
    }
    public function getApiVersion() : ?string
    {
        return $this->apiVersion;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setTermsOfService(?string $termsOfService) : void
    {
        $this->termsOfService = $termsOfService;
    }
    public function getTermsOfService() : ?string
    {
        return $this->termsOfService;
    }
    public function setContactName(?string $contactName) : void
    {
        $this->contactName = $contactName;
    }
    public function getContactName() : ?string
    {
        return $this->contactName;
    }
    public function setContactUrl(?string $contactUrl) : void
    {
        $this->contactUrl = $contactUrl;
    }
    public function getContactUrl() : ?string
    {
        return $this->contactUrl;
    }
    public function setContactEmail(?string $contactEmail) : void
    {
        $this->contactEmail = $contactEmail;
    }
    public function getContactEmail() : ?string
    {
        return $this->contactEmail;
    }
    public function setLicenseName(?string $licenseName) : void
    {
        $this->licenseName = $licenseName;
    }
    public function getLicenseName() : ?string
    {
        return $this->licenseName;
    }
    public function setLicenseUrl(?string $licenseUrl) : void
    {
        $this->licenseUrl = $licenseUrl;
    }
    public function getLicenseUrl() : ?string
    {
        return $this->licenseUrl;
    }
    /**
     * @param array<string>|null $categories
     */
    public function setCategories(?array $categories) : void
    {
        $this->categories = $categories;
    }
    public function getCategories() : ?array
    {
        return $this->categories;
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
    public function setApps(?About_Apps $apps) : void
    {
        $this->apps = $apps;
    }
    public function getApps() : ?About_Apps
    {
        return $this->apps;
    }
    /**
     * @param array<About_Link>|null $links
     */
    public function setLinks(?array $links) : void
    {
        $this->links = $links;
    }
    public function getLinks() : ?array
    {
        return $this->links;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('apiVersion' => $this->apiVersion, 'title' => $this->title, 'description' => $this->description, 'termsOfService' => $this->termsOfService, 'contactName' => $this->contactName, 'contactUrl' => $this->contactUrl, 'contactEmail' => $this->contactEmail, 'licenseName' => $this->licenseName, 'licenseUrl' => $this->licenseUrl, 'categories' => $this->categories, 'scopes' => $this->scopes, 'apps' => $this->apps, 'links' => $this->links), static function ($value) : bool {
            return $value !== null;
        });
    }
}

