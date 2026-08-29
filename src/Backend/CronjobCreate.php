<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new cronjob')]
class CronjobCreate extends Cronjob implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

