<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area y perimetro deltoide</title>
  </head>
  <body>
   <h1>Area de un del deltoide</h1>
   <?php
    $D1=8;
    $D2=6;
    $area=$D1*$D2;
    $L2=4;
    $l2=8;
    $perimetro=$L2+$l2;
    ?>
    <h4>La diagonal mayor del deltoide es:<?php echo $D1 ?></h4>
    <h4>La diagonal menor del deltoide es:<?php echo $D2 ?></h4>
    <h4> El area del deltoide es: <?php echo $area ?></h4>
    <h1>Perimetro de un deltoide</h1>
    <h4>la suma de los dos lados superiores es : <?php echo $L2 ?></h4>
    <h4>La suma de los lados inferiores es : <?php echo $l2 ?></h4>
    <h4>El perimetro del deltoide es : <?php echo $perimetro ?></h4>
    <br>
    <br>
    <a href="index.php"><button type="button" name="button">Inicio</button></a>
  </body>
</html>
