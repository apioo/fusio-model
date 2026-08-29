<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;

#[Description('Response payload containing the payment provider checkout URI')]
class PaymentCheckoutResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('URL to redirect the user to complete payment authorization')]
    protected ?string $approvalUrl = null;
    public function setApprovalUrl(?string $approvalUrl): void
    {
        $this->approvalUrl = $approvalUrl;
    }
    public function getApprovalUrl(): ?string
    {
        return $this->approvalUrl;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('approvalUrl', $this->approvalUrl);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

