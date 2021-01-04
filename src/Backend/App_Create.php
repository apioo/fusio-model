<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @Required({"userId", "name", "url", "scopes"})
 */
class App_Create extends App implements \JsonSerializable
{
}
