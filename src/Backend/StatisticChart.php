<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents dataset structures formatted for rendering statistic charts')]
class StatisticChart implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    #[Description('X-axis labels or time units for the statistic chart')]
    protected ?array $labels = null;
    /**
     * @var array<StatisticChartSeries>|null
     */
    #[Description('Data series elements displayed within the chart')]
    protected ?array $series = null;
    /**
     * @param array<string>|null $labels
     */
    public function setLabels(?array $labels): void
    {
        $this->labels = $labels;
    }
    /**
     * @return array<string>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * @param array<StatisticChartSeries>|null $series
     */
    public function setSeries(?array $series): void
    {
        $this->series = $series;
    }
    /**
     * @return array<StatisticChartSeries>|null
     */
    public function getSeries(): ?array
    {
        return $this->series;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('labels', $this->labels);
        $record->put('series', $this->series);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

