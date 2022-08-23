<?php

namespace App\Criacional\FactoryMethod;

use App\Criacional\FactoryMethod\Product\CarroProduct;
use App\Criacional\FactoryMethod\Product\TeslaModeloS;
use App\Criacional\FactoryMethod\Product\TeslaModeloX;

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