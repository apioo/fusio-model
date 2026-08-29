<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload defining target format and configuration for triggering an SDK generation run')]
class SdkGenerate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Target language format or output type for the SDK build')]
    protected ?string $format = null;
    #[Description('Optional generator specific configuration options')]
    protected ?string $config = null;
    public function setFormat(?string $format): void
    {
        $this->format = $format;
    }
    public function getFormat(): ?string
    {
        return $this->format;
    }
    public function setConfig(?string $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?string
    {
        return $this->config;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('format', $this->format);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

