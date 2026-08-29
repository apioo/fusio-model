<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Redirect response to initiate an OAuth2 flow')]
class ConnectionRedirectResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Target URI to redirect the user for OAuth2 authentication')]
    protected ?string $redirectUri = null;
    public function setRedirectUri(?string $redirectUri): void
    {
        $this->redirectUri = $redirectUri;
    }
    public function getRedirectUri(): ?string
    {
        return $this->redirectUri;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('redirectUri', $this->redirectUri);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

