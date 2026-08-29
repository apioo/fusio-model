<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for creating a new AI agent')]
class AgentCreate extends Agent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

