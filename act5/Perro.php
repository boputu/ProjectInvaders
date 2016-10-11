<?php

class Perro
{
    public $raza="";
    public $edad="";
    public $altura="";
    public $peso="";


    public function getRaza()
    {
    return $this->raza;
    }

    public function setRaza($raza)
    {
    $this->raza = $raza;
    return $this;
    }

    public function getEdad()
    {
    return $this->edad;
    }

    public function setEdad($edad)
    {
    $this->edad = $edad;
    return $this;
    }

    public function getAltura()
    {
    return $this->altura;
    }

    public function setAltura($altura)
    {
    $this->altura = $altura;
    return $this;
    }

    public function getPeso()
    {
    return $this->peso;
    }

    public function setPeso($peso)
    {
    $this->peso = $peso;
    return $this;
    }



}


 ?>
