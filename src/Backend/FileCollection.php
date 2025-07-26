<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;
/**
 * @extends \Fusio\Model\Common\Collection<File>
 */
#[Description('A paginated collection of file objects')]
class FileCollection extends \Fusio\Model\Common\Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

