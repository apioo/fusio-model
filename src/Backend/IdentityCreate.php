<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new identity provider entity')]
class IdentityCreate extends Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

