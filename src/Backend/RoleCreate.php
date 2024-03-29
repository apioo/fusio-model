<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('categoryId', 'name'))]
class RoleCreate extends Role implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

