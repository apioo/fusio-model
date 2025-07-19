<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \Fusio\Model\Common\Collection<Category>
 */
#[Description('A paginated collection of category objects')]
class CategoryCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

