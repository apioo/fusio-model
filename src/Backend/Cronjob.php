<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a cronjob which can invoke an action at a specific interval')]
class Cronjob implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Unique name of the object')]
    protected ?string $name = null;
    #[Description('The cron expression i.e. */5 * * * * for every 5 minutes')]
    protected ?string $cron = null;
    #[Description('The target action which gets invoked')]
    protected ?string $action = null;
    #[Description('The last execution date')]
    protected ?\PSX\DateTime\LocalDateTime $executeDate = null;
    #[Description('The last exit code')]
    protected ?int $exitCode = null;
    #[Description('Use this parameter to attach key-value data')]
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    /**
     * @var array<CronjobError>|null
     */
    #[Description('Contains an array of errors in case the cronjob has failed')]
    protected ?array $errors = null;
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
    public function setCron(?string $cron): void
    {
        $this->cron = $cron;
    }
    public function getCron(): ?string
    {
        return $this->cron;
    }
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    public function getAction(): ?string
    {
        return $this->action;
    }
    public function setExecuteDate(?\PSX\DateTime\LocalDateTime $executeDate): void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->executeDate;
    }
    public function setExitCode(?int $exitCode): void
    {
        $this->exitCode = $exitCode;
    }
    public function getExitCode(): ?int
    {
        return $this->exitCode;
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
     * @param array<CronjobError>|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
    /**
     * @return array<CronjobError>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('cron', $this->cron);
        $record->put('action', $this->action);
        $record->put('executeDate', $this->executeDate);
        $record->put('exitCode', $this->exitCode);
        $record->put('metadata', $this->metadata);
        $record->put('errors', $this->errors);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

