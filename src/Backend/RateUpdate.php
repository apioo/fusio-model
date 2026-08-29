<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing rate limit policy')]
class RateUpdate extends Rate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

