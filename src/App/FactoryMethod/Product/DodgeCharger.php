<?php

namespace App\FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando DodgeCharger\n";
    }

    public function frear()
    {
        echo "Freando DodgeCharger\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do DodgeCharger\n";
    }
}