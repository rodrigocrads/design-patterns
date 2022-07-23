<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Product\CarroProduct;

interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}