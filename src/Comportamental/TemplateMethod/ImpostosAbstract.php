<?php 

namespace App\Comportamental\TemplateMethod;

abstract class ImpostosAbstract
{
    private function calculaPrimeiroImpostoFixo(float $precoProduto): float
    {
        return $precoProduto * 1.3;
    }

    private function calculaSegundoImpostoFixo(float $precoProduto): float
    {
        return $precoProduto * 1.1;
    }

    // Template Method, contem a ordem de execução dos métodos da classe, junto com a chamada
    // do método Hook
    public function calculaImpostosProduto(float $precoProduto): float
    {
        $precoProduto = $this->calculaPrimeiroImpostoFixo($precoProduto);

        $precoProduto = $this->calculaSegundoImpostoFixo($precoProduto);

        $precoProduto = $this->calculaImpostoAdicional($precoProduto);

        $precoProduto = $this->calculaImpostoVariavel($precoProduto);

        return $precoProduto;
    }

    // Hook Method
    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto;
    }

    abstract protected function calculaImpostoVariavel(float $precoProduto): float;
}