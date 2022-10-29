<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class RpcResponseSuccess implements \JsonSerializable
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('jsonrpc' => $this->jsonrpc, 'result' => $this->result, 'id' => $this->id), static function ($value) : bool {
            return $value !== null;
        });
    }
}

