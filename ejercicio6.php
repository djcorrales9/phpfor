<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>ADSI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="container">
    <br>
  <h2>Algoritmo quye muestre la tabla de multiplicar de un numero cualquiera.</h2>
 <br>
 <?php

echo "<h1> Tablas De Multiplicar </h1>";

  for($a=6; $a<=6; $a++)
  {
   echo "<h4>Tabla del $a </h4>";


   for($i=1; $i<=10; $i++)
   {
    echo "$a x $i = ". ($a*$i) . "<br/>";
   }
  }
  ?>
  </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
