<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class LogError implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $message = null;
    protected ?string $trace = null;
    protected ?string $file = null;
    protected ?int $line = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setMessage(?int $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?int
    {
        return $this->message;
    }
    public function setTrace(?string $trace) : void
    {
        $this->trace = $trace;
    }
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    public function setFile(?string $file) : void
    {
        $this->file = $file;
    }
    public function getFile() : ?string
    {
        return $this->file;
    }
    public function setLine(?int $line) : void
    {
        $this->line = $line;
    }
    public function getLine() : ?int
    {
        return $this->line;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'message' => $this->message, 'trace' => $this->trace, 'file' => $this->file, 'line' => $this->line), static function ($value) : bool {
            return $value !== null;
        });
    }
}
