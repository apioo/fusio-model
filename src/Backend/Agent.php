<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents an agent')]
class Agent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Name of the agent')]
    protected ?string $name = null;
    #[Description('Description of the agent')]
    protected ?string $description = null;
    #[Description('Introduction message')]
    protected ?string $introduction = null;
    /**
     * @var array<AgentMessage>|null
     */
    #[Description('Initial messages send to the agent')]
    protected ?array $messages = null;
    /**
     * @var array<string>|null
     */
    #[Description('Tools available to this agent')]
    protected ?array $tools = null;
    #[Description('Action which gets invoked for each generated response')]
    protected ?string $action = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    #[Description('Use this parameter to attach key-value data')]
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
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
    public function setIntroduction(?string $introduction): void
    {
        $this->introduction = $introduction;
    }
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }
    /**
     * @param array<AgentMessage>|null $messages
     */
    public function setMessages(?array $messages): void
    {
        $this->messages = $messages;
    }
    /**
     * @return array<AgentMessage>|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }
    /**
     * @param array<string>|null $tools
     */
    public function setTools(?array $tools): void
    {
        $this->tools = $tools;
    }
    /**
     * @return array<string>|null
     */
    public function getTools(): ?array
    {
        return $this->tools;
    }
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    public function getAction(): ?string
    {
        return $this->action;
    }
    public function setInsertDate(?\PSX\DateTime\LocalDateTime $insertDate): void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->insertDate;
    }
    public function setMetadata(?\Fusio\Model\Common\Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata(): ?\Fusio\Model\Common\Metadata
    {
        return $this->metadata;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('description', $this->description);
        $record->put('introduction', $this->introduction);
        $record->put('messages', $this->messages);
        $record->put('tools', $this->tools);
        $record->put('action', $this->action);
        $record->put('insertDate', $this->insertDate);
        $record->put('metadata', $this->metadata);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

