<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('path', 'config'))]
class Route_Create extends Route implements \JsonSerializable
{
}

