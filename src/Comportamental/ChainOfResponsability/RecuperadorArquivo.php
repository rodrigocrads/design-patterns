<?php

namespace App\Comportamental\ChainOfResponsability;

use Exception;

abstract class RecuperadorArquivo
{
    private ?RecuperadorArquivo $proximo;

    public function __construct(RecuperadorArquivo $proximo = null)
    {
        $this->proximo = $proximo;
    }

    public function recuperar(string $nome): Arquivo
    {
        /** @var Arquivo */
        $a = $this->recuperarArquivo($nome);

        if ($a === null || !$a->isValido()) {
            return $this->chamarProximo($nome);
        }

        return $a;
    }

    protected function chamarProximo(string $nome): Arquivo
    {
        if ($this->proximo === null) {
            throw new Exception("Não foi possível recuperar o arquivo.");
        }

        return $this->proximo->recuperar($nome);
    }

    protected abstract function recuperarArquivo(string $nome): ?Arquivo;
}