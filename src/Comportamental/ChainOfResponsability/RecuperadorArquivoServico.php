<?php

namespace App\Comportamental\ChainOfResponsability;

class RecuperadorArquivoServico extends RecuperadorArquivo
{
    protected function recuperarArquivo(string $nome): ?Arquivo
    {
        // Simulando retorno do serviço
        return (new Arquivo())
            ->setNome("relatorio123.pdf");
    }
}