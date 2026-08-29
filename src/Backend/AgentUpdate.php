<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Payload for updating an existing AI agent')]
class AgentUpdate extends Agent implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

