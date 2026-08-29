<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Request payload to update an existing trigger')]
class TriggerUpdate extends Trigger implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

