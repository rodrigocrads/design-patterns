<?php

require_once('../../../vendor/autoload.php');

use App\Comportamental\ChainOfResponsability\Arquivo;
use App\Comportamental\ChainOfResponsability\RecuperadorArquivo;
use App\Comportamental\ChainOfResponsability\RecuperadorCacheDb;
use App\Comportamental\ChainOfResponsability\RecuperadorCacheMemoria;
use App\Comportamental\ChainOfResponsability\RecuperadorArquivoServico;

/** @var RecuperadorArquivo */
$recuperadorArquivo = 
    new RecuperadorCacheMemoria(
        new RecuperadorCacheDb(
            new RecuperadorArquivoServico()
        )
    );

/** @var Arquivo */
$arquivo1 = $recuperadorArquivo->recuperar("relatorio123.pdf");
$arquivo2 = $recuperadorArquivo->recuperar("relatorio123.pdf");

echo $arquivo1->getNome() . "\n";
echo $arquivo2->getNome() . "\n";