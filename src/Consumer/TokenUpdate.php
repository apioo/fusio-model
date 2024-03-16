<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('expire'))]
class TokenUpdate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?\PSX\DateTime\LocalDateTime $expire = null;
    public function setExpire(?\PSX\DateTime\LocalDateTime $expire) : void
    {
        $this->expire = $expire;
    }
    public function getExpire() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->expire;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('expire', $this->expire);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

