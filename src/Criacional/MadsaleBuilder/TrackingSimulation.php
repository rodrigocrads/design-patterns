<?php 

namespace App\Criacional\MadSaleBuilder;

class TrackingSimulation
{
    private string $saleCode;

    public function setSaleCode(string $saleCode): self
    {
        $this->saleCode = $saleCode;
        return $this;
    }

    public function getSaleCode(): string
    {
        return $this->saleCode;
    }
}