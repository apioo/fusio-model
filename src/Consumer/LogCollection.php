<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

/**
 * @extends \Fusio\Model\Common\Collection<Log>
 */
class LogCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

