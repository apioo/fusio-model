<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[Description('This object represents a row on a relational table')]
class DatabaseRow extends \PSX\Record\Record
{
}

