<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Payment_Checkout_Response implements \JsonSerializable
{
    protected ?string $approvalUrl = null;
    public function setApprovalUrl(?string $approvalUrl) : void
    {
        $this->approvalUrl = $approvalUrl;
    }
    public function getApprovalUrl() : ?string
    {
        return $this->approvalUrl;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('approvalUrl' => $this->approvalUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}
