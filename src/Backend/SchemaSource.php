<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains the TypeSchema specification')]
class SchemaSource implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

