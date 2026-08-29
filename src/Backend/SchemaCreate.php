<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new schema definition')]
class SchemaCreate extends Schema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

