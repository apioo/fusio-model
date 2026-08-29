<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating a system configuration entry')]
class ConfigUpdate extends Config implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

