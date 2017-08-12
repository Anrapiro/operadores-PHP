<?php
$HR="150";
$TH="50000";
$TI="250000";
$PN=($HR*$TH)-$TI;
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>salario neto</title>
   </head>
   <body>
     <h1>Salario neto</h1>
    <h3>Horas trabajadas: <?php echo $HR ?></h3>
    <h3>Tarifa horaria: <?php echo $TH ?></h3>
    <h3> Tasa de impuestos: <?php echo $TI ?></h3>
    <h3>el pago neto del trabajador es: <?php  echo $PN ?></h3>
   </body>
   <br>
   <br>
   <a href="index.php"><button type="button" name="button">Inicio</button></a>
 </html>
