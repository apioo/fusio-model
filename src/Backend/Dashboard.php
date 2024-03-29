<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Dashboard implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?StatisticChart $errorsPerOperation = null;
    protected ?StatisticChart $incomingRequests = null;
    protected ?StatisticChart $incomingTransactions = null;
    protected ?StatisticChart $mostUsedOperations = null;
    protected ?StatisticChart $timePerOperation = null;
    protected ?DashboardApps $latestApps = null;
    protected ?DashboardRequests $latestRequests = null;
    protected ?DashboardUsers $latestUsers = null;
    protected ?DashboardTransactions $latestTransactions = null;
    public function setErrorsPerOperation(?StatisticChart $errorsPerOperation) : void
    {
        $this->errorsPerOperation = $errorsPerOperation;
    }
    public function getErrorsPerOperation() : ?StatisticChart
    {
        return $this->errorsPerOperation;
    }
    public function setIncomingRequests(?StatisticChart $incomingRequests) : void
    {
        $this->incomingRequests = $incomingRequests;
    }
    public function getIncomingRequests() : ?StatisticChart
    {
        return $this->incomingRequests;
    }
    public function setIncomingTransactions(?StatisticChart $incomingTransactions) : void
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    public function getIncomingTransactions() : ?StatisticChart
    {
        return $this->incomingTransactions;
    }
    public function setMostUsedOperations(?StatisticChart $mostUsedOperations) : void
    {
        $this->mostUsedOperations = $mostUsedOperations;
    }
    public function getMostUsedOperations() : ?StatisticChart
    {
        return $this->mostUsedOperations;
    }
    public function setTimePerOperation(?StatisticChart $timePerOperation) : void
    {
        $this->timePerOperation = $timePerOperation;
    }
    public function getTimePerOperation() : ?StatisticChart
    {
        return $this->timePerOperation;
    }
    public function setLatestApps(?DashboardApps $latestApps) : void
    {
        $this->latestApps = $latestApps;
    }
    public function getLatestApps() : ?DashboardApps
    {
        return $this->latestApps;
    }
    public function setLatestRequests(?DashboardRequests $latestRequests) : void
    {
        $this->latestRequests = $latestRequests;
    }
    public function getLatestRequests() : ?DashboardRequests
    {
        return $this->latestRequests;
    }
    public function setLatestUsers(?DashboardUsers $latestUsers) : void
    {
        $this->latestUsers = $latestUsers;
    }
    public function getLatestUsers() : ?DashboardUsers
    {
        return $this->latestUsers;
    }
    public function setLatestTransactions(?DashboardTransactions $latestTransactions) : void
    {
        $this->latestTransactions = $latestTransactions;
    }
    public function getLatestTransactions() : ?DashboardTransactions
    {
        return $this->latestTransactions;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('errorsPerOperation', $this->errorsPerOperation);
        $record->put('incomingRequests', $this->incomingRequests);
        $record->put('incomingTransactions', $this->incomingTransactions);
        $record->put('mostUsedOperations', $this->mostUsedOperations);
        $record->put('timePerOperation', $this->timePerOperation);
        $record->put('latestApps', $this->latestApps);
        $record->put('latestRequests', $this->latestRequests);
        $record->put('latestUsers', $this->latestUsers);
        $record->put('latestTransactions', $this->latestTransactions);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

