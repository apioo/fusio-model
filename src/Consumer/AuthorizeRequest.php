<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('responseType', 'clientId', 'scope', 'allow'))]
class AuthorizeRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $responseType = null;
    protected ?string $clientId = null;
    protected ?string $redirectUri = null;
    protected ?string $scope = null;
    protected ?string $state = null;
    protected ?bool $allow = null;
    public function setResponseType(?string $responseType) : void
    {
        $this->responseType = $responseType;
    }
    public function getResponseType() : ?string
    {
        return $this->responseType;
    }
    public function setClientId(?string $clientId) : void
    {
        $this->clientId = $clientId;
    }
    public function getClientId() : ?string
    {
        return $this->clientId;
    }
    public function setRedirectUri(?string $redirectUri) : void
    {
        $this->redirectUri = $redirectUri;
    }
    public function getRedirectUri() : ?string
    {
        return $this->redirectUri;
    }
    public function setScope(?string $scope) : void
    {
        $this->scope = $scope;
    }
    public function getScope() : ?string
    {
        return $this->scope;
    }
    public function setState(?string $state) : void
    {
        $this->state = $state;
    }
    public function getState() : ?string
    {
        return $this->state;
    }
    public function setAllow(?bool $allow) : void
    {
        $this->allow = $allow;
    }
    public function getAllow() : ?bool
    {
        return $this->allow;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('responseType', $this->responseType);
        $record->put('clientId', $this->clientId);
        $record->put('redirectUri', $this->redirectUri);
        $record->put('scope', $this->scope);
        $record->put('state', $this->state);
        $record->put('allow', $this->allow);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

