<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class McpInitialize implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $protocolVersion = null;
    /**
     * @var \PSX\Record\Record<bool>|null
     */
    protected ?\PSX\Record\Record $capabilities = null;
    protected ?McpInitializeServerInfo $serverInfo = null;
    protected ?string $instructions = null;
    public function setProtocolVersion(?string $protocolVersion): void
    {
        $this->protocolVersion = $protocolVersion;
    }
    public function getProtocolVersion(): ?string
    {
        return $this->protocolVersion;
    }
    /**
     * @param \PSX\Record\Record<bool>|null $capabilities
     */
    public function setCapabilities(?\PSX\Record\Record $capabilities): void
    {
        $this->capabilities = $capabilities;
    }
    /**
     * @return \PSX\Record\Record<bool>|null
     */
    public function getCapabilities(): ?\PSX\Record\Record
    {
        return $this->capabilities;
    }
    public function setServerInfo(?McpInitializeServerInfo $serverInfo): void
    {
        $this->serverInfo = $serverInfo;
    }
    public function getServerInfo(): ?McpInitializeServerInfo
    {
        return $this->serverInfo;
    }
    public function setInstructions(?string $instructions): void
    {
        $this->instructions = $instructions;
    }
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('protocolVersion', $this->protocolVersion);
        $record->put('capabilities', $this->capabilities);
        $record->put('serverInfo', $this->serverInfo);
        $record->put('instructions', $this->instructions);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

