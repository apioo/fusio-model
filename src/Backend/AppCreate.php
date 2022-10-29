<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('userId', 'name', 'url', 'scopes'))]
class AppCreate extends App implements \JsonSerializable
{
}

