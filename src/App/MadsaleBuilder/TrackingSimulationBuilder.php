<?php

namespace Builder;

class TrackingSimulationBuilder extends BaseTrackingSimulationBuilder
{
    public function buildSaleCode()
    {
        $this->foguete->setLitrosCombustivel(1000);
    }

    public function buildProponents()
    {
        $this->foguete->setModelo('Foguete Modelo I');
    }

    public function buildPaymentBasicData()
    {
        $this->foguete->setNumeroMotores(3);
    }

    public function buildBusinessUsage()
    {
        $this->foguete->setNumeroLugares(8);
    }

    public function buildPaymentCreditCard()
    {
        $this->foguete->setNumeroLugares(8);
    }
}