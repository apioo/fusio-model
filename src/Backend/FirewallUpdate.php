<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing firewall rule')]
class FirewallUpdate extends Firewall implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

