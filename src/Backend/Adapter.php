<?php

declare(strict_types = 1);

namespace Fusio\Model\Backend;


class Adapter implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $actionClass = null;
    /**
     * @var array<string>|null
     */
    protected ?array $connectionClass = null;
    /**
     * @var array<string>|null
     */
    protected ?array $paymentClass = null;
    /**
     * @var array<string>|null
     */
    protected ?array $userClass = null;
    /**
     * @var array<string>|null
     */
    protected ?array $routesClass = null;
    /**
     * @var array<Connection>|null
     */
    protected ?array $connection = null;
    /**
     * @var array<Schema>|null
     */
    protected ?array $schema = null;
    /**
     * @var array<Action>|null
     */
    protected ?array $action = null;
    /**
     * @var array<Route>|null
     */
    protected ?array $routes = null;
    /**
     * @param array<string>|null $actionClass
     */
    public function setActionClass(?array $actionClass) : void
    {
        $this->actionClass = $actionClass;
    }
    public function getActionClass() : ?array
    {
        return $this->actionClass;
    }
    /**
     * @param array<string>|null $connectionClass
     */
    public function setConnectionClass(?array $connectionClass) : void
    {
        $this->connectionClass = $connectionClass;
    }
    public function getConnectionClass() : ?array
    {
        return $this->connectionClass;
    }
    /**
     * @param array<string>|null $paymentClass
     */
    public function setPaymentClass(?array $paymentClass) : void
    {
        $this->paymentClass = $paymentClass;
    }
    public function getPaymentClass() : ?array
    {
        return $this->paymentClass;
    }
    /**
     * @param array<string>|null $userClass
     */
    public function setUserClass(?array $userClass) : void
    {
        $this->userClass = $userClass;
    }
    public function getUserClass() : ?array
    {
        return $this->userClass;
    }
    /**
     * @param array<string>|null $routesClass
     */
    public function setRoutesClass(?array $routesClass) : void
    {
        $this->routesClass = $routesClass;
    }
    public function getRoutesClass() : ?array
    {
        return $this->routesClass;
    }
    /**
     * @param array<Connection>|null $connection
     */
    public function setConnection(?array $connection) : void
    {
        $this->connection = $connection;
    }
    public function getConnection() : ?array
    {
        return $this->connection;
    }
    /**
     * @param array<Schema>|null $schema
     */
    public function setSchema(?array $schema) : void
    {
        $this->schema = $schema;
    }
    public function getSchema() : ?array
    {
        return $this->schema;
    }
    /**
     * @param array<Action>|null $action
     */
    public function setAction(?array $action) : void
    {
        $this->action = $action;
    }
    public function getAction() : ?array
    {
        return $this->action;
    }
    /**
     * @param array<Route>|null $routes
     */
    public function setRoutes(?array $routes) : void
    {
        $this->routes = $routes;
    }
    public function getRoutes() : ?array
    {
        return $this->routes;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('actionClass', $this->actionClass);
        $record->put('connectionClass', $this->connectionClass);
        $record->put('paymentClass', $this->paymentClass);
        $record->put('userClass', $this->userClass);
        $record->put('routesClass', $this->routesClass);
        $record->put('connection', $this->connection);
        $record->put('schema', $this->schema);
        $record->put('action', $this->action);
        $record->put('routes', $this->routes);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

