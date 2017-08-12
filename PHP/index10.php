<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area y perimetro rombo</title>
  </head>
  <body>
    <h1>Area de un rombo</h1>
    <?php
  $diagonalmayor=4;
  $diagonalmenor=3;
  $area=($diagonalmayor*$diagonalmenor)/2;
  $lados=8;
  $perimetro=$lados*$area;
     ?>
     <h4>La diagonal mayor del rombo es: <?php echo $diagonalmayor. "cm" ?></h4>
     <h4>La diagonal menor del rombo es: <?php echo $diagonalmenor. "cm" ?></h4>.
     <h4>El area del rombo es: <?php echo $area. "cm²"  ?></h4>
     <h1>Perimetro del rombo </h1>
     <h4>los la suma de los cuatro lados lados del rombo es <?php echo $lados ?></h4>
     <h4>El perimetro del rombo es: <?php echo $perimetro ?></h4>
     <br>
     <br>
     <a href="index.php"><button type="button" name="button">Inicio</button></a>
     </body>
</html>
