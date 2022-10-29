<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Debug implements \JsonSerializable
{
    protected ?DebugHeaders $headers = null;
    protected ?DebugParameters $parameters = null;
    protected ?DebugBody $body = null;
    public function setHeaders(?DebugHeaders $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?DebugHeaders
    {
        return $this->headers;
    }
    public function setParameters(?DebugParameters $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?DebugParameters
    {
        return $this->parameters;
    }
    public function setBody(?DebugBody $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?DebugBody
    {
        return $this->body;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('headers' => $this->headers, 'parameters' => $this->parameters, 'body' => $this->body), static function ($value) : bool {
            return $value !== null;
        });
    }
}

