<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents a collection element')]
class FormElementCollection extends FormElementInput implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

