<?php

namespace App\Comportamental\ChainOfResponsability;

class RecuperadorCacheMemoria extends RecuperadorArquivo
{
    private $cache = [];

    public function __construct(RecuperadorArquivo $proximo = null)
    {
        parent::__construct($proximo);
    }

    protected function recuperarArquivo(string $nome): ?Arquivo
    {
        if (array_key_exists($nome, $this->cache)) {
            return $this->cache[$nome];
        }

        return null;
    }

    protected function chamarProximo(string $nome): Arquivo
    {
        /** @var Arquivo */
        $a = parent::chamarProximo($nome);

        $this->cache[$nome] = $a;

        return $a;
    }
}