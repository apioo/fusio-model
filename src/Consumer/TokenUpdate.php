<?php

declare(strict_types = 1);

namespace Fusio\Model\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'expire'))]
class TokenUpdate implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?\PSX\DateTime\LocalDate $expire = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setExpire(?\PSX\DateTime\LocalDate $expire) : void
    {
        $this->expire = $expire;
    }
    public function getExpire() : ?\PSX\DateTime\LocalDate
    {
        return $this->expire;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('expire', $this->expire);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

