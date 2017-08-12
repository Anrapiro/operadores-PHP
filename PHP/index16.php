<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cubo</title>
  </head>
  <body>
    <h1>Cuadrado de un numero</h1>
    <?php
    $numero=15;
    $exponente=3;
    $cubo=pow($numero,$exponente);
     ?>
   <h1>  El numero <?php echo $numero." elevado al cubo es: ".$cubo ?></h1>
   <br>
   <br>
   <a href="index.php"><button type="button" name="button">Inicio</button></a>
  </body>
</html>
