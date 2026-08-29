<?php

declare(strict_types = 1);

namespace Fusio\Model\System;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

class OAuthConfiguration implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('URL identifying the authorization server providing OpenID Connect/OAuth features')]
    protected ?string $issuer = null;
    #[Key('token_endpoint')]
    #[Description('URL of the authorization server\'s OAuth 2.0 token endpoint')]
    protected ?string $tokenEndpoint = null;
    /**
     * @var array<string>|null
     */
    #[Key('token_endpoint_auth_methods_supported')]
    #[Description('List of client authentication methods supported by the token endpoint')]
    protected ?array $tokenEndpointAuthMethodsSupported = null;
    #[Key('userinfo_endpoint')]
    #[Description('URL of the OAuth 2.0 UserInfo endpoint for retrieving user claims')]
    protected ?string $userinfoEndpoint = null;
    /**
     * @var array<string>|null
     */
    #[Key('scopes_supported')]
    #[Description('List of OAuth 2.0 scope values supported by the authorization server')]
    protected ?array $scopesSupported = null;
    /**
     * @var array<string>|null
     */
    #[Key('claims_supported')]
    #[Description('List of UserInfo claim names supported by the authorization server')]
    protected ?array $claimsSupported = null;
    public function setIssuer(?string $issuer): void
    {
        $this->issuer = $issuer;
    }
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    public function setTokenEndpoint(?string $tokenEndpoint): void
    {
        $this->tokenEndpoint = $tokenEndpoint;
    }
    public function getTokenEndpoint(): ?string
    {
        return $this->tokenEndpoint;
    }
    /**
     * @param array<string>|null $tokenEndpointAuthMethodsSupported
     */
    public function setTokenEndpointAuthMethodsSupported(?array $tokenEndpointAuthMethodsSupported): void
    {
        $this->tokenEndpointAuthMethodsSupported = $tokenEndpointAuthMethodsSupported;
    }
    /**
     * @return array<string>|null
     */
    public function getTokenEndpointAuthMethodsSupported(): ?array
    {
        return $this->tokenEndpointAuthMethodsSupported;
    }
    public function setUserinfoEndpoint(?string $userinfoEndpoint): void
    {
        $this->userinfoEndpoint = $userinfoEndpoint;
    }
    public function getUserinfoEndpoint(): ?string
    {
        return $this->userinfoEndpoint;
    }
    /**
     * @param array<string>|null $scopesSupported
     */
    public function setScopesSupported(?array $scopesSupported): void
    {
        $this->scopesSupported = $scopesSupported;
    }
    /**
     * @return array<string>|null
     */
    public function getScopesSupported(): ?array
    {
        return $this->scopesSupported;
    }
    /**
     * @param array<string>|null $claimsSupported
     */
    public function setClaimsSupported(?array $claimsSupported): void
    {
        $this->claimsSupported = $claimsSupported;
    }
    /**
     * @return array<string>|null
     */
    public function getClaimsSupported(): ?array
    {
        return $this->claimsSupported;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('issuer', $this->issuer);
        $record->put('token_endpoint', $this->tokenEndpoint);
        $record->put('token_endpoint_auth_methods_supported', $this->tokenEndpointAuthMethodsSupported);
        $record->put('userinfo_endpoint', $this->userinfoEndpoint);
        $record->put('scopes_supported', $this->scopesSupported);
        $record->put('claims_supported', $this->claimsSupported);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

