<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

/**
 * @Required({"name", "cron", "action"})
 */
class Cronjob_Create extends Cronjob implements \JsonSerializable
{
}
