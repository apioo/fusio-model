<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Pattern;

class Cronjob implements \JsonSerializable
{
    protected ?int $id = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,64}$')]
    protected ?string $name = null;
    protected ?string $cron = null;
    protected ?string $action = null;
    protected ?\DateTime $executeDate = null;
    protected ?int $exitCode = null;
    protected ?\Fusio\Model\Metadata $metadata = null;
    /**
     * @var array<Cronjob_Error>|null
     */
    protected ?array $errors = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setCron(?string $cron) : void
    {
        $this->cron = $cron;
    }
    public function getCron() : ?string
    {
        return $this->cron;
    }
    public function setAction(?string $action) : void
    {
        $this->action = $action;
    }
    public function getAction() : ?string
    {
        return $this->action;
    }
    public function setExecuteDate(?\DateTime $executeDate) : void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate() : ?\DateTime
    {
        return $this->executeDate;
    }
    public function setExitCode(?int $exitCode) : void
    {
        $this->exitCode = $exitCode;
    }
    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }
    public function setMetadata(?\Fusio\Model\Metadata $metadata) : void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata() : ?\Fusio\Model\Metadata
    {
        return $this->metadata;
    }
    /**
     * @param array<Cronjob_Error>|null $errors
     */
    public function setErrors(?array $errors) : void
    {
        $this->errors = $errors;
    }
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'name' => $this->name, 'cron' => $this->cron, 'action' => $this->action, 'executeDate' => $this->executeDate, 'exitCode' => $this->exitCode, 'metadata' => $this->metadata, 'errors' => $this->errors), static function ($value) : bool {
            return $value !== null;
        });
    }
}

