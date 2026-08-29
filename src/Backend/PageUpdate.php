<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing portal page')]
class PageUpdate extends Page implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

