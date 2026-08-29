<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;

use PSX\Schema\Attribute\Description;

#[Description('Represents an object containing all widget data for the dashboard')]
class Dashboard implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Uniquely identifies the object schema type')]
    protected ?string $kind = null;
    #[Description('Chart showing errors logged per operation over time')]
    protected ?StatisticChart $errorsPerOperation = null;
    #[Description('Chart showing total incoming HTTP requests over time')]
    protected ?StatisticChart $incomingRequests = null;
    #[Description('Chart showing total executed transactions over time')]
    protected ?StatisticChart $incomingTransactions = null;
    #[Description('Chart displaying the most frequently invoked API operations')]
    protected ?StatisticChart $mostUsedOperations = null;
    #[Description('Chart depicting average execution time per operation')]
    protected ?StatisticChart $timePerOperation = null;
    #[Description('Chart showing automated test execution and coverage metrics')]
    protected ?StatisticChart $testCoverage = null;
    #[Description('Chart showing the most active user activity types')]
    protected ?StatisticChart $mostUsedActivities = null;
    #[Description('Chart breaking down user activity frequencies')]
    protected ?StatisticChart $activitiesPerUser = null;
    #[Description('Chart tracking user registrations over time')]
    protected ?StatisticChart $userRegistrations = null;
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }
    public function getKind(): ?string
    {
        return $this->kind;
    }
    public function setErrorsPerOperation(?StatisticChart $errorsPerOperation): void
    {
        $this->errorsPerOperation = $errorsPerOperation;
    }
    public function getErrorsPerOperation(): ?StatisticChart
    {
        return $this->errorsPerOperation;
    }
    public function setIncomingRequests(?StatisticChart $incomingRequests): void
    {
        $this->incomingRequests = $incomingRequests;
    }
    public function getIncomingRequests(): ?StatisticChart
    {
        return $this->incomingRequests;
    }
    public function setIncomingTransactions(?StatisticChart $incomingTransactions): void
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    public function getIncomingTransactions(): ?StatisticChart
    {
        return $this->incomingTransactions;
    }
    public function setMostUsedOperations(?StatisticChart $mostUsedOperations): void
    {
        $this->mostUsedOperations = $mostUsedOperations;
    }
    public function getMostUsedOperations(): ?StatisticChart
    {
        return $this->mostUsedOperations;
    }
    public function setTimePerOperation(?StatisticChart $timePerOperation): void
    {
        $this->timePerOperation = $timePerOperation;
    }
    public function getTimePerOperation(): ?StatisticChart
    {
        return $this->timePerOperation;
    }
    public function setTestCoverage(?StatisticChart $testCoverage): void
    {
        $this->testCoverage = $testCoverage;
    }
    public function getTestCoverage(): ?StatisticChart
    {
        return $this->testCoverage;
    }
    public function setMostUsedActivities(?StatisticChart $mostUsedActivities): void
    {
        $this->mostUsedActivities = $mostUsedActivities;
    }
    public function getMostUsedActivities(): ?StatisticChart
    {
        return $this->mostUsedActivities;
    }
    public function setActivitiesPerUser(?StatisticChart $activitiesPerUser): void
    {
        $this->activitiesPerUser = $activitiesPerUser;
    }
    public function getActivitiesPerUser(): ?StatisticChart
    {
        return $this->activitiesPerUser;
    }
    public function setUserRegistrations(?StatisticChart $userRegistrations): void
    {
        $this->userRegistrations = $userRegistrations;
    }
    public function getUserRegistrations(): ?StatisticChart
    {
        return $this->userRegistrations;
    }
    /**
     * @return \PSX\Record\RecordInterface<mixed>
     */
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('kind', $this->kind);
        $record->put('errorsPerOperation', $this->errorsPerOperation);
        $record->put('incomingRequests', $this->incomingRequests);
        $record->put('incomingTransactions', $this->incomingTransactions);
        $record->put('mostUsedOperations', $this->mostUsedOperations);
        $record->put('timePerOperation', $this->timePerOperation);
        $record->put('testCoverage', $this->testCoverage);
        $record->put('mostUsedActivities', $this->mostUsedActivities);
        $record->put('activitiesPerUser', $this->activitiesPerUser);
        $record->put('userRegistrations', $this->userRegistrations);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}

