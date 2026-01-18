<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Text agent result')]
class AgentResultText extends AgentResult implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The output text')]
    protected ?string $content = null;
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('content', $this->content);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

