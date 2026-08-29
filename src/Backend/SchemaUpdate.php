<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing schema definition')]
class SchemaUpdate extends Schema implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

