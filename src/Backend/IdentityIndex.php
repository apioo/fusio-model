<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains all possible classes which can be used at an identity as class')]
class IdentityIndex implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<IdentityIndexEntry>|null
     */
    protected ?array $providers = null;
    /**
     * @param array<IdentityIndexEntry>|null $providers
     */
    public function setProviders(?array $providers): void
    {
        $this->providers = $providers;
    }
    /**
     * @return array<IdentityIndexEntry>|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('providers', $this->providers);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

