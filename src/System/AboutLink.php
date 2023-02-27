<?php

declare(strict_types = 1);

namespace Fusio\Model\System;


class AboutLink implements \JsonSerializable
{
    protected ?string $rel = null;
    protected ?string $href = null;
    public function setRel(?string $rel) : void
    {
        $this->rel = $rel;
    }
    public function getRel() : ?string
    {
        return $this->rel;
    }
    public function setHref(?string $href) : void
    {
        $this->href = $href;
    }
    public function getHref() : ?string
    {
        return $this->href;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('rel' => $this->rel, 'href' => $this->href), static function ($value) : bool {
            return $value !== null;
        });
    }
}
