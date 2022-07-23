<?php

namespace App\Criacional\MadSaleBuilder;

abstract class BaseTrackingSimulationBuilder
{
    /**
     * @var TrackingSimulation
     */
    protected $trackingSimulation;

    /**
     * @var Simulation
     */
    protected $simulation;

    public function __construct($simulation)
    {
        $this->trackingSimulation = new TrackingSimulation();
        $this->simulation = $simulation;
    }

    public function getTrackingSimulation(): TrackingSimulation
    {
        return $this->trackingSimulation;
    }

    abstract public function buildSaleCode();

    abstract public function buildProponents();

    abstract public function buildPaymentBasicData();

    abstract public function buildBusinessUsage();

    abstract public function buildPaymentCreditCard();
}