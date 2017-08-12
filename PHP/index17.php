
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conversion de tiempo</title>
  </head>
  <body>
    <h1>Conversion de tiempo</h1>
    <?php
     $hora=1;
     $min=$hora*60;

     $seg=$min*60;
     ?>
     <label for="">Horas</label>
     <input type="number" name="" value="1" disabled>
     <h2><?php echo $hora ?> hora tiene <?php echo $min ?> minutos</h2>
     <h2><?php echo $min ?> minutos tiene <?php echo $seg ?> segundos</h2>
     <br>
     <br>
     <a href="index.php"><button type="button" name="button">Inicio</button></a>
  </body>
</html>
