<?php

require_once('../../../vendor/autoload.php');

$strategyRar = new \App\Comportamental\Strategy\ComprimirRar();
$strategyZip = new \App\Comportamental\Strategy\ComprimirZip();
$strategyTar = new \App\Comportamental\Strategy\ComprimirTar();

$compressaoContext = new \App\Comportamental\Strategy\CompressaoContext($strategyRar);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');

echo "\n";

$compressaoContext->setCompressaoStrategy($strategyZip);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');

echo "\n";

$compressaoContext->setCompressaoStrategy($strategyTar);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');

echo "\n";