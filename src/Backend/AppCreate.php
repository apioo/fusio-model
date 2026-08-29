<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new consumer application')]
class AppCreate extends App implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

