<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @Required({"eventId", "userId", "endpoint"})
 */
class Event_Subscription_Create extends Event_Subscription implements \JsonSerializable
{
}
