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
     <h2>Algoritmo que pida un numero y muestre en pantalla el mismo numero se astericos.</h2>
<br>

    <?php

    $a="*";
    $b=7;
     for ($i=1; $i <= $b; $i++) {
         echo "<h1>&nbsp $a</h1>";
     }
 echo "<h3>El numero ingresado es: $b</h3>";


     ?>
    </div>

  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
