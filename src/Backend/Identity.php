<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $appId = null;
    protected ?int $roleId = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,255}$')]
    protected ?string $name = null;
    protected ?string $icon = null;
    protected ?string $class = null;
    protected ?string $clientId = null;
    protected ?string $clientSecret = null;
    protected ?string $authorizationUri = null;
    protected ?string $tokenUri = null;
    protected ?string $userInfoUri = null;
    protected ?string $idProperty = null;
    protected ?string $nameProperty = null;
    protected ?string $emailProperty = null;
    protected ?bool $allowCreate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    public function setRoleId(?int $roleId) : void
    {
        $this->roleId = $roleId;
    }
    public function getRoleId() : ?int
    {
        return $this->roleId;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setIcon(?string $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    public function setClass(?string $class) : void
    {
        $this->class = $class;
    }
    public function getClass() : ?string
    {
        return $this->class;
    }
    public function setClientId(?string $clientId) : void
    {
        $this->clientId = $clientId;
    }
    public function getClientId() : ?string
    {
        return $this->clientId;
    }
    public function setClientSecret(?string $clientSecret) : void
    {
        $this->clientSecret = $clientSecret;
    }
    public function getClientSecret() : ?string
    {
        return $this->clientSecret;
    }
    public function setAuthorizationUri(?string $authorizationUri) : void
    {
        $this->authorizationUri = $authorizationUri;
    }
    public function getAuthorizationUri() : ?string
    {
        return $this->authorizationUri;
    }
    public function setTokenUri(?string $tokenUri) : void
    {
        $this->tokenUri = $tokenUri;
    }
    public function getTokenUri() : ?string
    {
        return $this->tokenUri;
    }
    public function setUserInfoUri(?string $userInfoUri) : void
    {
        $this->userInfoUri = $userInfoUri;
    }
    public function getUserInfoUri() : ?string
    {
        return $this->userInfoUri;
    }
    public function setIdProperty(?string $idProperty) : void
    {
        $this->idProperty = $idProperty;
    }
    public function getIdProperty() : ?string
    {
        return $this->idProperty;
    }
    public function setNameProperty(?string $nameProperty) : void
    {
        $this->nameProperty = $nameProperty;
    }
    public function getNameProperty() : ?string
    {
        return $this->nameProperty;
    }
    public function setEmailProperty(?string $emailProperty) : void
    {
        $this->emailProperty = $emailProperty;
    }
    public function getEmailProperty() : ?string
    {
        return $this->emailProperty;
    }
    public function setAllowCreate(?bool $allowCreate) : void
    {
        $this->allowCreate = $allowCreate;
    }
    public function getAllowCreate() : ?bool
    {
        return $this->allowCreate;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('appId', $this->appId);
        $record->put('roleId', $this->roleId);
        $record->put('name', $this->name);
        $record->put('icon', $this->icon);
        $record->put('class', $this->class);
        $record->put('clientId', $this->clientId);
        $record->put('clientSecret', $this->clientSecret);
        $record->put('authorizationUri', $this->authorizationUri);
        $record->put('tokenUri', $this->tokenUri);
        $record->put('userInfoUri', $this->userInfoUri);
        $record->put('idProperty', $this->idProperty);
        $record->put('nameProperty', $this->nameProperty);
        $record->put('emailProperty', $this->emailProperty);
        $record->put('allowCreate', $this->allowCreate);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

