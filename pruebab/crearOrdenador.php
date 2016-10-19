<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad B</title>
  </head>
  <body>
    <?php
    include "Ordenador.php";
    $ordenador=new Ordenador();
    $ordenador2=new Ordenador();

    $ordenador->setMarca("apple");
    $ordenador2->setMarca("asus");
    $ordenador->setRam("8");
    $ordenador2->setRam("16");
    ?>
    Tenemos un ordenador1 de Marca <b><?=$ordenador->getMarca()?></b>. <br>
    Tiene <b><?=$ordenador->getRam()?> </b>RAM. <br>
    Tenemos un ordenador2 de Marca <b><?=$ordenador2->getMarca()?></b>. <br>
    Tiene <b><?=$ordenador2->getRam()?> </b>RAM. <br>
  </body>
</html>
