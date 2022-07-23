<?php 

namespace App\Comportamental\TemplateMethod;

class ImpostosVestuario extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return $precoProduto * 1.15;
    }
}