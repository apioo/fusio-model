<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \PSX\Record\Record<string>
 */
#[Description('Key-value pair map containing custom dynamic attributes associated with a user')]
class UserAttributes extends \PSX\Record\Record
{
}

