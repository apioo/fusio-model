<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

class McpTool implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the tool')]
    protected ?string $name = null;
    #[Description('Human-readable description')]
    protected ?string $description = null;
    #[Description('JSON Schema for the tools parameters')]
    protected mixed $inputSchema = null;
    #[Description('Optional hints about tool behavior')]
    protected ?McpToolAnnotations $annotations = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setInputSchema(mixed $inputSchema): void
    {
        $this->inputSchema = $inputSchema;
    }
    public function getInputSchema(): mixed
    {
        return $this->inputSchema;
    }
    public function setAnnotations(?McpToolAnnotations $annotations): void
    {
        $this->annotations = $annotations;
    }
    public function getAnnotations(): ?McpToolAnnotations
    {
        return $this->annotations;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('inputSchema', $this->inputSchema);
        $record->put('annotations', $this->annotations);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

