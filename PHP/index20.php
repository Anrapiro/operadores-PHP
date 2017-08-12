<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teorema de pitagoras</title>
  </head>
  <body>
    <h1>Teorema de pitagoras</h1>
    <h3>a2 + b2 = c2</h3>
    <h4>a2=5 <br> b2=12 <br> c2=?
    </h4>

     <?php
   $c1 = pow(5, 2); // Elevamos el "cateto 1" al cuadrado.

    $c2 = pow(12, 2); // Elevamos el "cateto 2" al cuadrado.

     $hipotenusa = sqrt($c1 + $c2); // Sacamos la raíz cuadrada de la suma de ambos catetos elevados al cuadrado

     echo 'La medida de la hipotenusa es de: <b>'.$hipotenusa.'</b>';


?>
<br>
<br>
<a href="index.php"><button type="button" name="button">Inicio</button></a>
  </body>
</html>
