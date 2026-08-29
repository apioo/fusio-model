<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing scope entity')]
class ScopeUpdate extends Scope implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

