<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new firewall rule')]
class FirewallCreate extends Firewall implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

