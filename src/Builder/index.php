<?php

require_once('../../vendor/autoload.php');

$montadoraDeFogueteTestI = new App\Builder\FabricaFoguetesDirector(
    new App\Builder\FogueteModeloIBuilder()
);

$montadoraDeFogueteTestII = new App\Builder\FabricaFoguetesDirector(
    new App\Builder\FogueteModeloIIBuilder()
);

$montadoraDeFogueteTestI->construirFoguete();
echo $montadoraDeFogueteTestI->getFoguete();

$montadoraDeFogueteTestII->construirFoguete();
echo $montadoraDeFogueteTestII->getFoguete();
