<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new scope entity')]
class ScopeCreate extends Scope implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

