<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent request')]
class AgentRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The input message')]
    protected ?string $message = null;
    /**
     * @var array<float>|null
     */
    #[Description('Optional schemas which are attached to the context')]
    protected ?array $schemas = null;
    /**
     * @var array<float>|null
     */
    #[Description('Optional actions which are attached to the context')]
    protected ?array $actions = null;
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * @param array<float>|null $schemas
     */
    public function setSchemas(?array $schemas): void
    {
        $this->schemas = $schemas;
    }
    /**
     * @return array<float>|null
     */
    public function getSchemas(): ?array
    {
        return $this->schemas;
    }
    /**
     * @param array<float>|null $actions
     */
    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }
    /**
     * @return array<float>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('message', $this->message);
        $record->put('schemas', $this->schemas);
        $record->put('actions', $this->actions);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

