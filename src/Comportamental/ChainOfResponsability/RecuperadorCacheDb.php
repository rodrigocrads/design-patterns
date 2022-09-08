<?php

namespace App\Comportamental\ChainOfResponsability;

class RecuperadorCacheDb extends RecuperadorArquivo
{
    private $db = [];

    public function __construct(RecuperadorArquivo $proximo = null)
    {
        parent::__construct($proximo);
    }

    protected function recuperarArquivo(string $nome): ?Arquivo
    {
        if (array_key_exists($nome, $this->db)) {
            return $this->db[$nome];
        }

        return null;
    }

    protected function chamarProximo(string $nome): Arquivo
    {
        /** @var Arquivo */
        $a = parent::chamarProximo($nome);

        // Simulando que está salvando no banco de dados 
        $this->db[$nome] = $a;

        return $a;
    }
}