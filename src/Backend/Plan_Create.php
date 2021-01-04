<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @Required({"name", "price"})
 */
class Plan_Create extends Plan implements \JsonSerializable
{
}
