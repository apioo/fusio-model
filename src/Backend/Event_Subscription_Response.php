<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Event_Subscription_Response implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?int $attempts = null;
    protected ?string $error = null;
    protected ?\DateTime $executeDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setAttempts(?int $attempts) : void
    {
        $this->attempts = $attempts;
    }
    public function getAttempts() : ?int
    {
        return $this->attempts;
    }
    public function setError(?string $error) : void
    {
        $this->error = $error;
    }
    public function getError() : ?string
    {
        return $this->error;
    }
    public function setExecuteDate(?\DateTime $executeDate) : void
    {
        $this->executeDate = $executeDate;
    }
    public function getExecuteDate() : ?\DateTime
    {
        return $this->executeDate;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'attempts' => $this->attempts, 'error' => $this->error, 'executeDate' => $this->executeDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}

