<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class Health_Check implements \JsonSerializable
{
    protected ?bool $healthy = null;
    protected ?string $error = null;
    public function setHealthy(?bool $healthy) : void
    {
        $this->healthy = $healthy;
    }
    public function getHealthy() : ?bool
    {
        return $this->healthy;
    }
    public function setError(?string $error) : void
    {
        $this->error = $error;
    }
    public function getError() : ?string
    {
        return $this->error;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('healthy' => $this->healthy, 'error' => $this->error), static function ($value) : bool {
            return $value !== null;
        });
    }
}

