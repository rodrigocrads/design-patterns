<?php

namespace App\FactoryMethod;

use App\Criacional\FactoryMethod\Product\CarroProduct;

interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}