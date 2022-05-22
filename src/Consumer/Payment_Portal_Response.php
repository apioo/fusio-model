<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class Payment_Portal_Response implements \JsonSerializable
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
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('redirectUrl' => $this->redirectUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}
