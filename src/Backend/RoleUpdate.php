<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing user role entity')]
class RoleUpdate extends Role implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

