<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

#[Description('Request payload to initiate a checkout flow for a plan')]
class PaymentCheckoutRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Target subscription plan ID to purchase')]
    protected ?int $planId = null;
    #[Description('URL where the user is redirected after successful payment completion')]
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
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
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

