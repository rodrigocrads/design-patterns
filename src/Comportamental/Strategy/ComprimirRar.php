<?php

namespace App\Comportamental\Strategy;

class ComprimirRar extends CompressaoStrategy
{
    public function comprimir(string $caminhosArquivos): bool
    {
        echo "Arquivo comprimido no formato '.RAR'";

        return true;
    }
}