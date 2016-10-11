<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichero donde usamos el perro</title>
  </head>
  <body>
    <?php
    //Creamos los objetos
    include "Perro.php";
    $perro=new Perro();
    //Les asignamos una raza
    $perro->setRaza("Pitbull");
    //Y les asignamos una edad
    $perro->setEdad("10 años");
    //Les asignamos una altura
    $perro->setAltura("120 cm");
    //Les asignamos un peso
    $perro->setPeso("35 kg");
    ?>
    En mi casa tenemos un perro de raza <b><?=$perro->getRaza()?></b>. <br>
    Tiene <b><?=$perro->getEdad()?></b>. <br>
    Mide <b><?=$perro->getAltura()?></b>. <br>
    Y además pesa <b><?=$perro->getPeso()?></b>. <br>
  </body>
</html>
