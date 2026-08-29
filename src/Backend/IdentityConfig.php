<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[Description('Identity provider configuration containing key-value parameters')]
class IdentityConfig extends \PSX\Record\Record
{
}

