<?php

namespace App\Criacional\MadSaleBuilder;

class TrackingSimulationDirector
{
    protected $builder;

    public function __construct(TrackingSimulationBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function getTrackingSimulation(): TrackingSimulation
    {
        return $this->builder->getTrackingSimulation();
    }

    public function build()
    {
        $this->builder->buildSaleCode();
        $this->builder->buildProponents();
        $this->builder->buildPaymentBasicData();
        $this->builder->buildBusinessUsage();
    }

    public function buildCreditCardPaymentType()
    {
        $this->builder->buildPaymentCreditCard();
    }
}