<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents a connection selection')]
class FormElementConnection extends FormElementSelect implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

