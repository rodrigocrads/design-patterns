<?php

namespace App\Criacional\Builder;

abstract class FogueteBuilder
{
    /**
     * @var FogueteProduct
     */
    protected $foguete;

    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    public function getFoguete(): FogueteProduct
    {
        return $this->foguete;
    }

    abstract public function buildTanqueCombustivel();

    abstract public function buildModelo();

    abstract public function buildMotores();

    abstract public function buildNumeroLugares();
}