<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \Fusio\Model\Common\Collection<Operation>
 */
#[Description('A paginated collection of operation objects')]
class OperationCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

