<?php

namespace App\FactoryMethod;

use App\Criacional\FactoryMethodProduct\CarroProduct;
use App\Criacional\FactoryMethodProduct\DodgeCharger;
use App\Criacional\FactoryMethodProduct\DodgeDart;

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