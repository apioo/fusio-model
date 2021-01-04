<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @Required({"categoryId", "name"})
 */
class Role_Create extends Role implements \JsonSerializable
{
}
