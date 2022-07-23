<?php 

namespace App\Criacional\Builder;

class FogueteProduct
{
    protected $litrosCombustiveis;

    protected $modelo;

    protected $numeroMotores;

    protected $numeroLugares;

    public function __toString(): string
    {
        $result = "Foquete model: {$this->getModelo()}\n";        
        $result .= "Litros de tanque: {$this->getLitrosCombustivel()}\n";        
        $result .= "Número de motores: {$this->getNumeroMotores()}\n";        
        $result .= "Número de lugares: {$this->getNumeroLugares()}\n";
        
        return $result;
    }

    public function getLitrosCombustivel()
    {
        return $this->litrosCombustiveis;
    }

    public function setLitrosCombustivel(float $litrosCombustivel): self
    {
        $this->litrosCombustiveis = $litrosCombustivel;
        return $this;
    }

    public function getNumeroLugares()
    {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares): self
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }

    public function getNumeroMotores()
    {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores): self
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;
        return $this;
    }
}