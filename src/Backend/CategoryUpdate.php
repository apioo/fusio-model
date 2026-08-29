<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing category')]
class CategoryUpdate extends Category implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

