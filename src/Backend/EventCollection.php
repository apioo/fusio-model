<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \Fusio\Model\Common\Collection<Event>
 */
#[Description('A paginated collection of event objects')]
class EventCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

