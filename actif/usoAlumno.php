<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad Alumno</title>
  </head>
  <body>
    <?php
    //Creamos los objetos
    include "alumno.php";
    $alumno=new alumno();
    //Les asignamos un nombre
    $alumno->setNombre("Borja");
    //les asignamos una edad
    $alumno->setEdad("15");
    //Les asignamos un ciclo
    $alumno->setCiclo("DAW");
    //Les asignamos un curso
    $alumno->setCurso("3");
    ?>
    Tengo un alumno que se llama <b><?=$alumno->getNombre()?></b>. <br>
    Tiene <b><?=$alumno->getEdad()?></b> años. <br>
    Esta estudiando el ciclo de <b><?=$alumno->getCiclo()?></b>. <br>
    Esta en el curso <b><?=$alumno->getCurso()?></b>.
  </body>
</html>
