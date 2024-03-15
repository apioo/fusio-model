<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('eventId', 'userId', 'endpoint'))]
class WebhookCreate extends Webhook implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

