<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('eventId', 'userId', 'endpoint'))]
class EventSubscriptionCreate extends EventSubscription implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

