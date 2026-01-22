<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents an input tag editor to enter comma-separated values')]
class FormElementTag extends FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

