<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Product\CarroProduct;
use App\FactoryMethod\Product\DodgeCharger;
use App\FactoryMethod\Product\DodgeDart;

class DodgeFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro === 'dart') {
            return new DodgeDart();
        }

        if ($modeloCarro === 'charger') {
            return new DodgeCharger();
        }

        throw new \Exception("Modelo de carro: {$modeloCarro} não existente.");
    }
}