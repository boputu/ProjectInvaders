<?php

class Ordenador
{
    public $marca="hp";
    public $ram=4;


    public function getMarca()
    {
    return $this->marca;
    }

    public function getRam()
    {
    return $this->ram;
    }

    public function setMarca($marca)
    {
    $this->marca = $marca;
    return $this;
    }

    public function setRam($ram)
    {
    $this->ram = $ram;
    return $this;
    }

}


 ?>
