<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[Description('A key value object containing the changes')]
class Audit_Object extends \PSX\Record\Record
{
}

