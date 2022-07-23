<?php

require_once('../../../vendor/autoload.php');

$impostosAlimentacao = new \App\Comportamental\TemplateMethod\ImpostosAlimentacao();
$impostosVestuario = new \App\Comportamental\TemplateMethod\ImpostosVestuario();
$impostosEletronicos = new \App\Comportamental\TemplateMethod\ImpostosEletronicos();

echo "Preço final de alimentação: {$impostosAlimentacao->calculaImpostosProduto(10)}";
echo "\n";

echo "Preço final de vestuário: {$impostosVestuario->calculaImpostosProduto(10)}";
echo "\n";

echo "Preço final de eletrônicos: {$impostosEletronicos->calculaImpostosProduto(10)}";
echo "\n";
