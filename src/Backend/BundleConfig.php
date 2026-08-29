<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<mixed>
 */
#[Description('Configuration settings and resource specs exported within the bundle')]
class BundleConfig extends \PSX\Record\Record
{
}

