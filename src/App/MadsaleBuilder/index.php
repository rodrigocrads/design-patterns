<?php

require_once('../vendor/autoload.php');

$montadoraDeFogueteTestI = new Builder\FabricaFoguetesDirector(
    new Builder\FogueteModeloIBuilder()
);

$montadoraDeFogueteTestII = new Builder\FabricaFoguetesDirector(
    new Builder\FogueteModeloIIBuilder()
);

$montadoraDeFogueteTestI->construirFoguete();
echo $montadoraDeFogueteTestI->getFoguete();

$montadoraDeFogueteTestII->construirFoguete();
echo $montadoraDeFogueteTestII->getFoguete();