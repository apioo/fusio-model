<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[Description('The connection configuration which contains arbitrary key-value entries')]
class ConnectionConfig extends \PSX\Record\Record
{
}

