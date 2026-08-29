<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Request payload to create a new webhook subscription')]
class WebhookCreate extends Webhook implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

