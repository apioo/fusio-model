<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class PaymentCheckoutRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $planId = null;
    protected ?string $returnUrl = null;
    public function setPlanId(?int $planId): void
    {
        $this->planId = $planId;
    }
    public function getPlanId(): ?int
    {
        return $this->planId;
    }
    public function setReturnUrl(?string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('planId', $this->planId);
        $record->put('returnUrl', $this->returnUrl);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

