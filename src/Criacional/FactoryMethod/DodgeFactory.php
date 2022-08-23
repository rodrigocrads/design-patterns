<?php

namespace App\Criacional\FactoryMethod;

use App\Criacional\FactoryMethod\Product\CarroProduct;
use App\Criacional\FactoryMethod\Product\DodgeCharger;
use App\Criacional\FactoryMethod\Product\DodgeDart;

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