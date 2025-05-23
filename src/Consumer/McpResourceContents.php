<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class McpResourceContents implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<McpResourceContent>|null
     */
    protected ?array $contents = null;
    /**
     * @param array<McpResourceContent>|null $contents
     */
    public function setContents(?array $contents): void
    {
        $this->contents = $contents;
    }
    /**
     * @return array<McpResourceContent>|null
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('contents', $this->contents);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

