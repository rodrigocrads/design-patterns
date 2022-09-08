<?php

namespace App\Comportamental\ChainOfResponsability;

class Arquivo
{
    private string $nome;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function isValido(): bool
    {
        return true;
        // todo: adicionar lógica se o arquivo é valido.
    }
}
