<?php

require_once('../../../vendor/autoload.php');

$teslaFactory = new App\Criacional\FactoryMethodTeslaFactory();
$dodgeFactory = new App\Criacional\FactoryMethodDodgeFactory();

try {
    $teslaModeloS = $teslaFactory->criarCarro('modelo_s');
    $teslaModeloX = $teslaFactory->criarCarro('modelo_x');

    $dodgeDart = $dodgeFactory->criarCarro('dart');
    $dodgeCharge = $dodgeFactory->criarCarro('charger');
} catch(Exception $e) {
    echo $e->getMessage();
}

echo $teslaModeloS->acelerar();
echo $teslaModeloS->frear();
echo $teslaModeloS->trocarMarcha();
echo "\n";
