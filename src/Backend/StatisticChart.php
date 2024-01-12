<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class StatisticChart implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $labels = null;
    /**
     * @var array<StatisticChartData>|null
     */
    protected ?array $data = null;
    /**
     * @var array<string>|null
     */
    protected ?array $series = null;
    /**
     * @param array<string>|null $labels
     */
    public function setLabels(?array $labels) : void
    {
        $this->labels = $labels;
    }
    /**
     * @return array<string>|null
     */
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    /**
     * @param array<StatisticChartData>|null $data
     */
    public function setData(?array $data) : void
    {
        $this->data = $data;
    }
    /**
     * @return array<StatisticChartData>|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @param array<string>|null $series
     */
    public function setSeries(?array $series) : void
    {
        $this->series = $series;
    }
    /**
     * @return array<string>|null
     */
    public function getSeries() : ?array
    {
        return $this->series;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('labels', $this->labels);
        $record->put('data', $this->data);
        $record->put('series', $this->series);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

