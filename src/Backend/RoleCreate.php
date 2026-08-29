<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new user role entity')]
class RoleCreate extends Role implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

