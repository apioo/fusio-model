<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Request payload to update existing user account information')]
class UserUpdate extends User implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

