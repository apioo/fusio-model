<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[Description('Arbitrary configuration map for the generator provider')]
class GeneratorProviderConfig extends \PSX\Record\Record
{
}

