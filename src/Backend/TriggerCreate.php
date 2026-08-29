<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Request payload to create a new trigger')]
class TriggerCreate extends Trigger implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

