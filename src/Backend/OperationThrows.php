<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<string>
 */
#[Description('Map of HTTP error status codes to target schema names')]
class OperationThrows extends \PSX\Record\Record
{
}

