<?php

class Ordenador
{
    public $tipo="";
    public $color="";
    public $tamano="";
    public $peso="";


    public function getTipo()
    {
    return $this->tipo;
    }

    public function setTipo($tipo)
    {
    $this->tipo = $tipo;
    return $this;
    }

    public function getColor()
    {
    return $this->color;
    }

    public function setColor($color)
    {
    $this->color = $color;
    return $this;
    }

    public function getTamano()
    {
    return $this->tamano;
    }

    public function setTamano($tamano)
    {
    $this->tamano = $tamano;
    return $this;
    }

    public function getPeso()
    {
    return $this->peso;
    }

    public function setPeso($peso)
    {
    $this->peso= $peso;
    return $this;
    }



}


 ?>
