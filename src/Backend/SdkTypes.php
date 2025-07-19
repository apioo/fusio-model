<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<string>
 */
#[Description('Represents available SDK type which can be generated')]
class SdkTypes extends \PSX\Record\Record
{
}

