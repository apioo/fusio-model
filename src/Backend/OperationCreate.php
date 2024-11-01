<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('httpMethod', 'httpPath', 'httpCode', 'name', 'outgoing', 'action'))]
class OperationCreate extends Operation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}

