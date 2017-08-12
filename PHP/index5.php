<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cuadrado</title>
  </head>
  <body>
    <h1>Cuadrado de un numero</h1>
    <?php
    $base=15;
    $exponente=2;
    $res=pow($base,$exponente);
     ?>
   <h1> El cuadrado del numero <?php echo $base." es ".$res ?></h1>
   <br>
   <br>
   <a href="index.php"><button type="button" name="button">Inicio</button></a>
  </body>
</html>
