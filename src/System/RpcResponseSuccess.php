<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class RpcResponseSuccess implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $jsonrpc = null;
    protected ?RpcResponseResult $result = null;
    protected ?int $id = null;
    public function setJsonrpc(?string $jsonrpc) : void
    {
        $this->jsonrpc = $jsonrpc;
    }
    public function getJsonrpc() : ?string
    {
        return $this->jsonrpc;
    }
    public function setResult(?RpcResponseResult $result) : void
    {
        $this->result = $result;
    }
    public function getResult() : ?RpcResponseResult
    {
        return $this->result;
    }
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('jsonrpc', $this->jsonrpc);
        $record->put('result', $this->result);
        $record->put('id', $this->id);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

