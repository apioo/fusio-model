<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Debug implements \JsonSerializable
{
    protected ?Debug_Headers $headers = null;
    protected ?Debug_Parameters $parameters = null;
    protected ?Debug_Body $body = null;
    public function setHeaders(?Debug_Headers $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?Debug_Headers
    {
        return $this->headers;
    }
    public function setParameters(?Debug_Parameters $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?Debug_Parameters
    {
        return $this->parameters;
    }
    public function setBody(?Debug_Body $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?Debug_Body
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

