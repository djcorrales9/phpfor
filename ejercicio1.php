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
<h2>Algoritmo que pida dos numeros y muestre todos los numeros pares que van desde el primero al segundo.
    sedebe controlar que los valores son correctos.</h2>
    <br>
<?php
$a=1;
$b=50;
echo "<h4>Numero1: $a</h4>";
echo "<h4>Numero2: $b</h4>";
for ($a=1; $a <= $b ; $a++) {
  if (($a%2)==0) {
     echo "&nbsp",$a++;
  }

     }


 ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
