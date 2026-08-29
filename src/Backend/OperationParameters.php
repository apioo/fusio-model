<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<OperationSchema>
 */
#[Description('Map of path or query parameters accepted by the operation')]
class OperationParameters extends \PSX\Record\Record
{
}

