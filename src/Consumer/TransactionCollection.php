<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

/**
 * @extends \Fusio\Model\Common\Collection<Transaction>
 */
class TransactionCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

