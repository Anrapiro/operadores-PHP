<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>operaciones matematicas
    </title>
  </head>
  <body>
    <?php
$num=50;
$num1=15;
$S=$num+$num1;
$R=$num-$num1;
$M=$num*$num1;
$D=$num/$num1;
$M=$num%$num1;
     ?>
    <h4>Numero 1: <?php echo $num ?><br> Numero 2: <?php echo $num1 ?></h4>
    <h1>La suma de <?php echo $num ?> y <?php echo $num1 ?> es: <?php echo $S ?></h1>
    <h1>La resta de <?php echo $num ?> y <?php echo $num1 ?> es: <?php echo $R ?></h1>
    <h1>La multiplicacion de <?php echo $num ?> y <?php echo $num1 ?> es: <?php echo $M ?></h1>
    <h1>La Divicion de <?php echo $num ?> y <?php echo $num1 ?> es: <?php echo $D ?></h1>
      <h1>El modulo de <?php echo $num ?> y <?php echo $num1 ?> es: <?php echo $M ?></h1>
      <br>
      <br>
      <a href="index.php"><button type="button" name="button">Inicio</button></a>
  </body>
</html>
