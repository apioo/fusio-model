<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Payment_Portal_Request implements \JsonSerializable
{
    protected ?string $returnUrl = null;
    public function setReturnUrl(?string $returnUrl) : void
    {
        $this->returnUrl = $returnUrl;
    }
    public function getReturnUrl() : ?string
    {
        return $this->returnUrl;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('returnUrl' => $this->returnUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}

