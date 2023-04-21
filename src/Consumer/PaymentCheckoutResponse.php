<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;


class PaymentCheckoutResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
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
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('approvalUrl', $this->approvalUrl);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

