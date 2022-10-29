<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Dashboard implements \JsonSerializable
{
    protected ?StatisticChart $errorsPerRoute = null;
    protected ?StatisticChart $incomingRequests = null;
    protected ?StatisticChart $incomingTransactions = null;
    protected ?StatisticChart $mostUsedRoutes = null;
    protected ?StatisticChart $timePerRoute = null;
    protected ?DashboardApps $latestApps = null;
    protected ?DashboardRequests $latestRequests = null;
    protected ?DashboardUsers $latestUsers = null;
    protected ?DashboardTransactions $latestTransactions = null;
    public function setErrorsPerRoute(?StatisticChart $errorsPerRoute) : void
    {
        $this->errorsPerRoute = $errorsPerRoute;
    }
    public function getErrorsPerRoute() : ?StatisticChart
    {
        return $this->errorsPerRoute;
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
    public function setMostUsedRoutes(?StatisticChart $mostUsedRoutes) : void
    {
        $this->mostUsedRoutes = $mostUsedRoutes;
    }
    public function getMostUsedRoutes() : ?StatisticChart
    {
        return $this->mostUsedRoutes;
    }
    public function setTimePerRoute(?StatisticChart $timePerRoute) : void
    {
        $this->timePerRoute = $timePerRoute;
    }
    public function getTimePerRoute() : ?StatisticChart
    {
        return $this->timePerRoute;
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
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('errorsPerRoute' => $this->errorsPerRoute, 'incomingRequests' => $this->incomingRequests, 'incomingTransactions' => $this->incomingTransactions, 'mostUsedRoutes' => $this->mostUsedRoutes, 'timePerRoute' => $this->timePerRoute, 'latestApps' => $this->latestApps, 'latestRequests' => $this->latestRequests, 'latestUsers' => $this->latestUsers, 'latestTransactions' => $this->latestTransactions), static function ($value) : bool {
            return $value !== null;
        });
    }
}

