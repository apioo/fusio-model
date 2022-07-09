<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Action_Index implements \JsonSerializable
{
    /**
     * @var array<Action_Index_Entry>|null
     */
    protected ?array $actions = null;
    /**
     * @param array<Action_Index_Entry>|null $actions
     */
    public function setActions(?array $actions) : void
    {
        $this->actions = $actions;
    }
    public function getActions() : ?array
    {
        return $this->actions;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('actions' => $this->actions), static function ($value) : bool {
            return $value !== null;
        });
    }
}

