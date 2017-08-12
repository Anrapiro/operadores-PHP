<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Suma de 2 numeros en PHP</title>
</head>
<body>

<!--<form action="index2.php" method="POST">
  <label for="A">ingrese valor a A:</label >
	<input type="number" name="numero1" required>
  <label for="B">Ingrese valor a B</label>
		<input type="number" name="numero2" required>
 <input type="submit" value="calcular" >
</form>-->

<?php

  # code...
  $num1 =15; #$_POST['numero1'];
  $num2 =22; #$_POST['numero2'];
  $suma = $num1+$num2;
  $resta=$num1-$num2;
  $resta1=$num2-$num1;
  $multiplicacion = $num1*$num2;
  $Divicion = $num1/$num2;
  $Divicion1=$num2/$num1;
  $Residio = $num1%$num2;
  $Residio1=$num2%$num1;
	 echo "numero A= ".$num1;
	 echo "<br>";
	  echo "numero B= ".$num2;
  echo "<hr>";
  echo "La suma de  A=  ".$num1." y B=  ".$num2." es: ".$suma ;
  echo "<br>";
  echo "la resta de  A=  " .$num1." y B=  ".$num2." es: ".$resta;
  echo "<br>";
  echo "la resta de  B=  ".$num2." y A=  ".$num1." es: ".$resta1;
  echo "<br>";
  echo "la multiplicacion de  A=  ".$num1."y B=  ".$num2." es: ".$multiplicacion;
  echo "<br>";
  echo "la Divicion de  A=  ".$num1."y B=  ".$num2." es: ".$Divicion;
  echo "<br>";
  echo "la Divicion de  B=  ".$num2." y A=  ".$num1." es: ".$Divicion1;
  echo "<br>";
  echo "la Residio de  la Divicion de A=".$num1."y B=".$num2." es: ".$Residio;
  echo "<br>";
  echo "la Residio de  la Divicion de A=  ".$num2."y B=   ".$num1." es: ".$Residio1;

?>
<br>
<br>
<a href="index.php"><button type="button" name="button">Inicio</button></a>
</body>
</html>
