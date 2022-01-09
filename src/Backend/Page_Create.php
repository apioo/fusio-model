<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('title', 'content'))]
class Page_Create extends Page implements \JsonSerializable
{
}

