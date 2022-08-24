<?php

namespace App\Estrutural\Adapter;

class Pedido
{
    protected $numeroPedido;
    protected $valorTotal;
    protected $produtos;

    public function addProduto(string $produto)
    {
        $this->produtos[] = $produto;
        return $this;
    }

    // Getters e Setters ...
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function getNumeroPedido()
    {
        return $this->numeroPedido;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }

    public function setNumeroPedido($numeroPedido)
    {
        $this->numeroPedido = $numeroPedido;
    }

}