<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new action entity')]
class ActionCreate extends Action implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

