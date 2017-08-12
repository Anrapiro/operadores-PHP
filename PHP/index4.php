<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notas</title>
  </head>
  <body>

    <h1>Promedio de 3 notas </h1>
    <?php
     $note1=10;
     $note2=8;
     $note3=5;
     $promedio=($note1+$note2+$note3)/3;
     ?>
     <h4>Primera nota: <?php echo $note1; ?></h4>
     <h4>Segunda nota: <?php echo $note2; ?></h4>
     <h4>Tercera nota: <?php echo $note3; ?></h4>

     <h3>El promedio de las notas es:<?php echo $promedio; ?></h3>
     <br>
     <br>
     <a href="index.php"><button type="button" name="button">Inicio</button></a>

    </table>
  </body>
</html>
