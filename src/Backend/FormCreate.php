<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new form definition')]
class FormCreate extends Form implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

