<?php 

namespace App\Comportamental\TemplateMethod;

class ImpostosAlimentacao extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return $precoProduto;
    }
}