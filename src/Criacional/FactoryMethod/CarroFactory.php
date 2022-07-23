<?php

namespace App\FactoryMethod;

use App\Criacional\FactoryMethodProduct\CarroProduct;

interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}