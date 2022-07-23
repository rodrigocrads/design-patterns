<?php

namespace App\Comportamental\Strategy;

class ComprimirZip extends CompressaoStrategy
{
    public function comprimir(string $caminhosArquivos): bool
    {
        echo "Arquivo comprimido no formato '.ZIP'";

        return true;
    }
}