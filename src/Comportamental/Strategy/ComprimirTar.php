<?php

namespace App\Comportamental\Strategy;

class ComprimirTar extends CompressaoStrategy
{
    public function comprimir(string $caminhosArquivos): bool
    {
        echo "Arquivo comprimido no formato '.TAR'";

        return true;
    }
}