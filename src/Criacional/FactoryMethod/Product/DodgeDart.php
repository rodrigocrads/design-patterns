<?php

namespace App\Criacional\FactoryMethodProduct;

class DodgeDart implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando DodgeDart\n";
    }

    public function frear()
    {
        echo "Freando DodgeDart\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do DodgeDart\n";
    }
}