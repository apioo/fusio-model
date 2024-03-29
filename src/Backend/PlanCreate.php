<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'price'))]
class PlanCreate extends Plan implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

