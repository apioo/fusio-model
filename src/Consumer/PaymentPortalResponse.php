<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class PaymentPortalResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $redirectUrl = null;
    public function setRedirectUrl(?string $redirectUrl): void
    {
        $this->redirectUrl = $redirectUrl;
    }
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('redirectUrl', $this->redirectUrl);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

