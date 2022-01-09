<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('eventId', 'userId', 'endpoint'))]
class Event_Subscription_Create extends Event_Subscription implements \JsonSerializable
{
}

