<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name'))]
class ActionCreate extends Action implements \JsonSerializable
{
}

