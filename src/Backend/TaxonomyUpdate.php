<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing taxonomy node')]
class TaxonomyUpdate extends Taxonomy implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

