<?php

require_once('../../vendor/autoload.php');

$impostosAlimentacao = new \App\TemplateMethod\ImpostosAlimentacao();
$impostosVestuario = new \App\TemplateMethod\ImpostosVestuario();
$impostosEletronicos = new \App\TemplateMethod\ImpostosEletronicos();

echo "Preço final de alimentação: {$impostosAlimentacao->calculaImpostosProduto(10)}";
echo "\n";

echo "Preço final de vestuário: {$impostosVestuario->calculaImpostosProduto(10)}";
echo "\n";

echo "Preço final de eletrônicos: {$impostosEletronicos->calculaImpostosProduto(10)}";
echo "\n";
