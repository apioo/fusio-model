<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\Description;

#[Description('Form element which represents an action selection')]
class FormElementAction extends FormElementSelect implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

