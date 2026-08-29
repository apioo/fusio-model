<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new subscription or point plan')]
class PlanCreate extends Plan implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

