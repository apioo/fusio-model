<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing event entity')]
class EventUpdate extends Event implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

