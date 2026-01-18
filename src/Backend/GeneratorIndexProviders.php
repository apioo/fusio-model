<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains all possible classes which can be used at an generator as class')]
class GeneratorIndexProviders implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<GeneratorIndexProvider>|null
     */
    protected ?array $providers = null;
    /**
     * @param array<GeneratorIndexProvider>|null $providers
     */
    public function setProviders(?array $providers): void
    {
        $this->providers = $providers;
    }
    /**
     * @return array<GeneratorIndexProvider>|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
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

