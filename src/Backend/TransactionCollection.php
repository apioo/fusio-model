<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \Fusio\Model\Common\Collection<Transaction>
 */
#[Description('A paginated collection of transaction objects')]
class TransactionCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

