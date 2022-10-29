<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class PaymentPortalResponse implements \JsonSerializable
{
    protected ?string $redirectUrl = null;
    public function setRedirectUrl(?string $redirectUrl) : void
    {
        $this->redirectUrl = $redirectUrl;
    }
    public function getRedirectUrl() : ?string
    {
        return $this->redirectUrl;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('redirectUrl' => $this->redirectUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}

