<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @extends \Fusio\Model\Common\Collection<DatabaseRow>
 */
class DatabaseRows extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

