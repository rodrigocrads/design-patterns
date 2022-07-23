<?php

require_once('../../../vendor/autoload.php');

$montadoraDeFogueteTestI = new App\Criacional\Builder\FabricaFoguetesDirector(
    new App\Criacional\Builder\FogueteModeloIBuilder()
);

$montadoraDeFogueteTestII = new App\Criacional\Builder\FabricaFoguetesDirector(
    new App\Criacional\Builder\FogueteModeloIIBuilder()
);

$montadoraDeFogueteTestI->construirFoguete();
echo $montadoraDeFogueteTestI->getFoguete();

$montadoraDeFogueteTestII->construirFoguete();
echo $montadoraDeFogueteTestII->getFoguete();
