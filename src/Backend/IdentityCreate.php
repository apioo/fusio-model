<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('appId', 'name', 'icon', 'class'))]
class IdentityCreate extends Identity implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

