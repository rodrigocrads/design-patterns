<?php 

namespace App\Comportamental\TemplateMethod;

class ImpostosEletronicos extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return $precoProduto * 1.2;
    }

    // sobrescrevendo o método Hook
    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto - $precoProduto * 0.1;
    }
}