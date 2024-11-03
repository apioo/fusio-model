<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @extends \Fusio\Model\Common\Collection<Event>
 */
class EventCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

