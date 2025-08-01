<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an app to access the API on-behalf of a user')]
class App implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    protected ?int $userId = null;
    #[Description('Status of the object either 1 = active, 2 = pending, 3 = deactivated or 4 = deleted')]
    protected ?int $status = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('Url where the app is hosted')]
    protected ?string $url = null;
    #[Description('Optional URL-encoded parameters of the app i.e. foo=bar&bar=foo')]
    protected ?string $parameters = null;
    #[Description('The app key also known as client id which is generated on creation')]
    protected ?string $appKey = null;
    #[Description('The app secret also known as client secret which is generated on creation')]
    protected ?string $appSecret = null;
    #[Description('Use this parameter to attach key-value data')]
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    #[Description('The create date of this object')]
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    /**
     * @var array<string>|null
     */
    #[Description('A list of assigned scopes for this app')]
    protected ?array $scopes = null;
    /**
     * @var array<Token>|null
     */
    #[Description('A list of tokens which are assigned to this app')]
    protected ?array $tokens = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
    }
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
    public function setParameters(?string $parameters): void
    {
        $this->parameters = $parameters;
    }
    public function getParameters(): ?string
    {
        return $this->parameters;
    }
    public function setAppKey(?string $appKey): void
    {
        $this->appKey = $appKey;
    }
    public function getAppKey(): ?string
    {
        return $this->appKey;
    }
    public function setAppSecret(?string $appSecret): void
    {
        $this->appSecret = $appSecret;
    }
    public function getAppSecret(): ?string
    {
        return $this->appSecret;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata(): ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    public function setDate(?\PSX\DateTime\LocalDateTime $date): void
    {
        $this->date = $date;
    }
    public function getDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->date;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }
    /**
     * @param array<Token>|null $tokens
     */
    public function setTokens(?array $tokens): void
    {
        $this->tokens = $tokens;
    }
    /**
     * @return array<Token>|null
     */
    public function getTokens(): ?array
    {
        return $this->tokens;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('userId', $this->userId);
        $record->put('status', $this->status);
        $record->put('name', $this->name);
        $record->put('url', $this->url);
        $record->put('parameters', $this->parameters);
        $record->put('appKey', $this->appKey);
        $record->put('appSecret', $this->appSecret);
        $record->put('metadata', $this->metadata);
        $record->put('date', $this->date);
        $record->put('scopes', $this->scopes);
        $record->put('tokens', $this->tokens);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

