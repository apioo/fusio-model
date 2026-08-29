<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing operation entity')]
class OperationUpdate extends Operation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

