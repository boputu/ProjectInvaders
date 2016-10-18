<?php


//Creamos la clase
class alumno
{
//Definimos los atributos a través de variables
public $nombre="";
public $edad="";
public $ciclo="";
public $curso="";
//Definimos los getters
public function getNombre()
{
return $this->nombre;
}
public function getEdad()
{
return $this->edad;
}
public function getCiclo()
{
return $this->ciclo;
}
public function getCurso()
{
return $this->curso;
}
//Definimos los setters
public function setNombre($nuevoNombre)
{
$this->nombre = $nuevoNombre;
return $this;
}
public function setEdad($nuevaEdad)
{
if ($nuevaEdad<18) {
  $this->edad=18;
}else{
    $this->edad=$nuevaEdad;
  }
}
public function setCiclo($ciclo)
{
$this->ciclo = $ciclo;
return $this;
}
public function setCurso($nuevoCurso)
{
if ($nuevoCurso=1) {
  $this->curso=$nuevoCurso;
} elseif ($nuevoCurso=2) {
  $this->curso=$nuevoCurso;
}else{
  $this->curso=1;
}
}
}



 ?>
