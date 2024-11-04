<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('A key value object containing the changes')]
class AuditObject implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

