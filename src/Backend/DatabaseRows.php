<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @extends \Fusio\Model\Common\Collection<Database_Row>
 */
class DatabaseRows extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

