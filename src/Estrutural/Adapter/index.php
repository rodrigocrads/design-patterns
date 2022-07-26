<?php

require_once('../../../vendor/autoload.php');

$integracaoLegado = new \App\Estrutural\Adapter\IntegracaoErp();

$integracaoErpAdapter = new \App\Estrutural\Adapter\IntegracaoErpAdapter($integracaoLegado);

$token = $integracaoErpAdapter->gerarToken('123456', 'GABRIEL_ANHAIA');

$pedidoDeTeste = new \App\Estrutural\Adapter\Pedido();
$pedidoDeTeste->setValorTotal(2500);
$pedidoDeTeste->setNumeroPedido(123456);
$pedidoDeTeste->addProduto("IPhone X");
$pedidoDeTeste->addProduto("Carregador sem fio - IPhone X");

$pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido(
    $pedidoDeTeste,
    $token
);

if ($pedidoEnviadoComSucesso) {
    echo 'Pedido enviado com sucesso!';
}