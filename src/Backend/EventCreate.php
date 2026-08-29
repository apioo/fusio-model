<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new event entity')]
class EventCreate extends Event implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

