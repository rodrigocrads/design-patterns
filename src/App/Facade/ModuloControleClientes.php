<?php

namespace App\Facade;

class ModuloControleClientes
{
    public function buscaCliente(string $cpfClient): array
    {
        // Simula a busca de um cliente pelo seu cpf
        return [
            'nome' => 'Gabriel Cunha',
            'telefone'  => '21999999999',
            'email' => 'gabriel@gmail.com.br'
        ];
    }
}