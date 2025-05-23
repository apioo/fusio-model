<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class McpToolError implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<McpToolResultText>|null
     */
    protected ?array $content = null;
    protected ?bool $isError = null;
    /**
     * @param array<McpToolResultText>|null $content
     */
    public function setContent(?array $content): void
    {
        $this->content = $content;
    }
    /**
     * @return array<McpToolResultText>|null
     */
    public function getContent(): ?array
    {
        return $this->content;
    }
    public function setIsError(?bool $isError): void
    {
        $this->isError = $isError;
    }
    public function getIsError(): ?bool
    {
        return $this->isError;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('content', $this->content);
        $record->put('isError', $this->isError);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

