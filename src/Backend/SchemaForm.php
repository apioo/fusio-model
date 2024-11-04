<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Contains a UI vocabulary to describe the UI of the schema')]
class SchemaForm implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

