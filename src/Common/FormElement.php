<?php

declare(strict_types = 1);

namespace Fusio\Model\Common;

use PSX\Schema\Attribute\DerivedType;
use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Discriminator;

#[Description('Form base element')]
#[Discriminator('type')]
#[DerivedType(FormElementCheckbox::class, 'checkbox')]
#[DerivedType(FormElementCollection::class, 'collection')]
#[DerivedType(FormElementInput::class, 'input')]
#[DerivedType(FormElementMap::class, 'map')]
#[DerivedType(FormElementSelect::class, 'select')]
#[DerivedType(FormElementTextArea::class, 'textarea')]
#[DerivedType(FormElementTypeAPI::class, 'typeapi')]
#[DerivedType(FormElementTypeSchema::class, 'typeschema')]
abstract class FormElement implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $element = null;
    protected ?string $name = null;
    protected ?string $title = null;
    protected ?string $help = null;
    public function setElement(?string $element): void
    {
        $this->element = $element;
    }
    public function getElement(): ?string
    {
        return $this->element;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setHelp(?string $help): void
    {
        $this->help = $help;
    }
    public function getHelp(): ?string
    {
        return $this->help;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('element', $this->element);
        $record->put('name', $this->name);
        $record->put('title', $this->title);
        $record->put('help', $this->help);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

