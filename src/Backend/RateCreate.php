<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new rate limit policy')]
class RateCreate extends Rate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

