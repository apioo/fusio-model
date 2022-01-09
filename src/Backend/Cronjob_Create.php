<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'cron', 'action'))]
class Cronjob_Create extends Cronjob implements \JsonSerializable
{
}

