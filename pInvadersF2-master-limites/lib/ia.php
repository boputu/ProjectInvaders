<?php

class ia
{

  //PROPIEDADES

  public $fila = '3';
  public $columna = '1';


  public function RandomPos() {
  $this->columna=rand(0,3);
  $this->fila=rand(0,3);
    
  }

  //MÉTODOS
  public function getfila() {
    return $this->fila;
  }
  public function getcolumna() {
    return $this->columna;
  }
  //SETTERS
  public function setfila($fil) {
    $this->fila = $fil;
    //Añadimos condiciones
    if ($fil>3) {
      $this->fila = 3;
//Si el valor de la fila que asignamos es mayor que 3 (por ejemplo 4) se establecerá automáticamente en 3
    }elseif ($fil<0) {
      $this->fila = 0;
//Si el valor de la fila que asignamos es menor que 0 (por ejemplo -5) se establecerá automáticamente en 0
    }else {
      $this->fila = $fil;
//Si no se pondra el valor asignado normal
    }
  }
  public function setcolumna($col) {
    $this->columna = $col;
    //Añadimos condiciones
    if ($col>3) {
      $this->columna = 3;
//Si el valor de la columna que asignamos es mayor que 3 (por ejemplo 4) se establecerá automáticamente en 3
    }elseif ($col<0) {
      $this->columna = 0;
//Si el valor de la columna que asignamos es menor que 0 (por ejemplo -5) se establecerá automáticamente en 0
    }else {
      $this->columna = $col;
//Si no se pondra el valor asignado normal
    }
  }


}

?>
