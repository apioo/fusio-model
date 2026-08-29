<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class CaptchaChallenge implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $algorithm = null;
    protected ?string $challenge = null;
    protected ?int $maxnumber = null;
    protected ?string $salt = null;
    protected ?string $signature = null;
    protected ?int $expires = null;
    public function setAlgorithm(?string $algorithm): void
    {
        $this->algorithm = $algorithm;
    }
    public function getAlgorithm(): ?string
    {
        return $this->algorithm;
    }
    public function setChallenge(?string $challenge): void
    {
        $this->challenge = $challenge;
    }
    public function getChallenge(): ?string
    {
        return $this->challenge;
    }
    public function setMaxnumber(?int $maxnumber): void
    {
        $this->maxnumber = $maxnumber;
    }
    public function getMaxnumber(): ?int
    {
        return $this->maxnumber;
    }
    public function setSalt(?string $salt): void
    {
        $this->salt = $salt;
    }
    public function getSalt(): ?string
    {
        return $this->salt;
    }
    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }
    public function getSignature(): ?string
    {
        return $this->signature;
    }
    public function setExpires(?int $expires): void
    {
        $this->expires = $expires;
    }
    public function getExpires(): ?int
    {
        return $this->expires;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('algorithm', $this->algorithm);
        $record->put('challenge', $this->challenge);
        $record->put('maxnumber', $this->maxnumber);
        $record->put('salt', $this->salt);
        $record->put('signature', $this->signature);
        $record->put('expires', $this->expires);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

