<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('This object represents a test. A test helps to verify that all operations work as expected')]
class Test implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier for the object')]
    protected ?int $id = null;
    #[Description('Status of the object either 1 = pending, 2 = success, 3 = warning, 4 = error, 5 = skipped or 6 = disabled')]
    protected ?int $status = null;
    protected ?string $operationName = null;
    protected ?string $message = null;
    protected ?string $response = null;
    protected ?TestConfig $config = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
    }
    public function setOperationName(?string $operationName): void
    {
        $this->operationName = $operationName;
    }
    public function getOperationName(): ?string
    {
        return $this->operationName;
    }
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setResponse(?string $response): void
    {
        $this->response = $response;
    }
    public function getResponse(): ?string
    {
        return $this->response;
    }
    public function setConfig(?TestConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?TestConfig
    {
        return $this->config;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('status', $this->status);
        $record->put('operationName', $this->operationName);
        $record->put('message', $this->message);
        $record->put('response', $this->response);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

