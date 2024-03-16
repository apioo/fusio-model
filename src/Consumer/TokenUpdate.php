<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('scope', 'expire'))]
class TokenUpdate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $appId = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scope = null;
    protected ?\PSX\DateTime\LocalDateTime $expire = null;
    public function setAppId(?int $appId) : void
    {
        $this->appId = $appId;
    }
    public function getAppId() : ?int
    {
        return $this->appId;
    }
    /**
     * @param array<string>|null $scope
     */
    public function setScope(?array $scope) : void
    {
        $this->scope = $scope;
    }
    /**
     * @return array<string>|null
     */
    public function getScope() : ?array
    {
        return $this->scope;
    }
    public function setExpire(?\PSX\DateTime\LocalDateTime $expire) : void
    {
        $this->expire = $expire;
    }
    public function getExpire() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->expire;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('appId', $this->appId);
        $record->put('scope', $this->scope);
        $record->put('expire', $this->expire);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

