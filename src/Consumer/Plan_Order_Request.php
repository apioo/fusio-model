<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('planId'))]
class Plan_Order_Request implements \JsonSerializable
{
    protected ?int $planId = null;
    public function setPlanId(?int $planId) : void
    {
        $this->planId = $planId;
    }
    public function getPlanId() : ?int
    {
        return $this->planId;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('planId' => $this->planId), static function ($value) : bool {
            return $value !== null;
        });
    }
}

