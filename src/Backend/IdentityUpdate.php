<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing identity provider entity')]
class IdentityUpdate extends Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

