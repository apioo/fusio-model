<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new taxonomy organization node')]
class TaxonomyCreate extends Taxonomy implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

