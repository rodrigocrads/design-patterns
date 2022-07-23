<?php

namespace App\FactoryMethod;

use App\Criacional\FactoryMethodProduct\CarroProduct;
use App\Criacional\FactoryMethodProduct\TeslaModeloS;
use App\Criacional\FactoryMethodProduct\TeslaModeloX;

class TeslaFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro === 'modelo_x') {
            return new TeslaModeloX();
        }

        if ($modeloCarro === 'modelo_s') {
            return new TeslaModeloS();
        }

        throw new \Exception("Modelo de carro: {$modeloCarro} não existente.");
    }
}