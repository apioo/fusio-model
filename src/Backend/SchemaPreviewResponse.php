<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class SchemaPreviewResponse implements \JsonSerializable
{
    protected ?string $preview = null;
    public function setPreview(?string $preview) : void
    {
        $this->preview = $preview;
    }
    public function getPreview() : ?string
    {
        return $this->preview;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('preview' => $this->preview), static function ($value) : bool {
            return $value !== null;
        });
    }
}

