<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class ActionExecuteResponse implements \JsonSerializable
{
    protected ?int $statusCode = null;
    protected ?ActionExecuteResponseHeaders $headers = null;
    protected ?ActionExecuteResponseBody $body = null;
    public function setStatusCode(?int $statusCode) : void
    {
        $this->statusCode = $statusCode;
    }
    public function getStatusCode() : ?int
    {
        return $this->statusCode;
    }
    public function setHeaders(?ActionExecuteResponseHeaders $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?ActionExecuteResponseHeaders
    {
        return $this->headers;
    }
    public function setBody(?ActionExecuteResponseBody $body) : void
    {
        $this->body = $body;
    }
    public function getBody() : ?ActionExecuteResponseBody
    {
        return $this->body;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('statusCode' => $this->statusCode, 'headers' => $this->headers, 'body' => $this->body), static function ($value) : bool {
            return $value !== null;
        });
    }
}
