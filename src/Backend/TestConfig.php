<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Configuration parameters for executing a test run')]
class TestConfig extends ActionExecuteRequest implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

