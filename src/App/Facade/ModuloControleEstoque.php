<?php

namespace App\Facade;

class ModuloControleEstoque
{
    public function registraRetirada(string $codigoDoLivro, int $cpfDoCliente): bool
    {
        // Efetua registro de retirada do livro
        return true;
    }

    public function validaEstoque(string $codigoDoLivro): bool
    {
        // ... Valida se possui estoque
        echo "Registro de retirada efeturado com sucesso.\n";

        return true;
    }
}