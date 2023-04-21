<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class SdkGenerate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $format = null;
    protected ?string $config = null;
    public function setFormat(?string $format) : void
    {
        $this->format = $format;
    }
    public function getFormat() : ?string
    {
        return $this->format;
    }
    public function setConfig(?string $config) : void
    {
        $this->config = $config;
    }
    public function getConfig() : ?string
    {
        return $this->config;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('format', $this->format);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

