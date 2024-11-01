<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name'))]
class ScopeCreate extends Scope implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

