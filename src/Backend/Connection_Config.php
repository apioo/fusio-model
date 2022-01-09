<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\MaxProperties;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[MaxProperties(16)]
class Connection_Config extends \PSX\Record\Record
{
}

