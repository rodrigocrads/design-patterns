<?php

namespace App\Comportamental\Strategy;

class CompressaoContext
{
    private $compressaoStrategy;

    public function __construct(CompressaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }

    public function setCompressaoStrategy(CompressaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }

    public function comprimir(string $caminhoArquivo)
    {
        $this->compressaoStrategy->comprimir($caminhoArquivo);
    }
}