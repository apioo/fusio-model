<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents a map element')]
class FormElementMap extends FormElementInput implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

