<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new portal page')]
class PageCreate extends Page implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

