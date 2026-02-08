<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('An action commit which represents a change in the action configuration')]
class ActionCommit implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('The user which has made the change')]
    protected ?User $user = null;
    #[Description('A unique hash which represents this commit')]
    protected ?string $commitHash = null;
    #[Description('The provided action configuration')]
    protected ?ActionConfig $config = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }
    public function getUser(): ?User
    {
        return $this->user;
    }
    public function setCommitHash(?string $commitHash): void
    {
        $this->commitHash = $commitHash;
    }
    public function getCommitHash(): ?string
    {
        return $this->commitHash;
    }
    public function setConfig(?ActionConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?ActionConfig
    {
        return $this->config;
    }
    public function setInsertDate(?\PSX\DateTime\LocalDateTime $insertDate): void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->insertDate;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('user', $this->user);
        $record->put('commitHash', $this->commitHash);
        $record->put('config', $this->config);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

