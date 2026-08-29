<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Description;
/**
 * @extends \Fusio\Model\Common\Collection<App>
 */
#[Description('Collection of consumer applications')]
class AppCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

