<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Cronjob implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $cron = null;
    protected ?string $action = null;
    protected ?\PSX\DateTime\LocalDateTime $executeDate = null;
    protected ?int $exitCode = null;
    protected ?\Fusio\Model\Common\Metadata $metadata = null;
    /**
     * @var array<CronjobError>|null
     */
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

