<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Action prompt which helps to create an action using AI')]
class ActionPrompt implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('What type of action should be created')]
    protected ?string $class = null;
    #[Description('The prompt which describes the action logic')]
    protected ?string $prompt = null;
    public function setClass(?string $class): void
    {
        $this->class = $class;
    }
    public function getClass(): ?string
    {
        return $this->class;
    }
    public function setPrompt(?string $prompt): void
    {
        $this->prompt = $prompt;
    }
    public function getPrompt(): ?string
    {
        return $this->prompt;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('class', $this->class);
        $record->put('prompt', $this->prompt);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

