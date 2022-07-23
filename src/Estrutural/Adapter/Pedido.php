<?php

namespace App\Adapter;

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
}