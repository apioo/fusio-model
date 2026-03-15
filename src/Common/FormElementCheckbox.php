<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents a checkbox element')]
class FormElementCheckbox extends FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

