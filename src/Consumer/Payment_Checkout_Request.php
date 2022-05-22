<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Payment_Checkout_Request implements \JsonSerializable
{
    protected ?int $planId = null;
    protected ?string $returnUrl = null;
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function setReturnUrl(?string $returnUrl) : void
    {
        $this->returnUrl = $returnUrl;
    }
    public function getReturnUrl() : ?string
    {
        return $this->returnUrl;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('planId' => $this->planId, 'returnUrl' => $this->returnUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}
