<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element to select an action')]
class FormElementAction extends FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

