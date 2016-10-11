<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichero donde usamos el ordenador</title>
  </head>
  <body>
    <?php
    //Creamos los objetos
    include "Ordenador.php";
    $ordenador=new Ordenador();
    //Les asignamos un color
    $ordenador->setColor("gris");
    //Y les asignamos un tipo
    $ordenador->setTipo("mac");
    //Les asignamos un tamaño
    $ordenador->setTamano("XL");
    //Les asignamos un peso
    $ordenador->setPeso("50kg");
    ?>
    En la clase tenemos una ordenador de color <b><?=$ordenador->getColor()?></b>. <br>
    De tipo <b><?=$ordenador->getTipo()?></b>. <br>
    Tiene un tamaño de <b><?=$ordenador->getTamano()?></b>. <br>
    Junto a un peso de <b><?=$ordenador->getPeso()?></b>.
  </body>
</html>
