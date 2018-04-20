<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">

  </head>
  <body>
    <h1>Hey!</h1>
<?php
echo "Hello";
$color = "azul";
switch ($color) {
  case 'rojo':
   echo "<p>
   Es rojo
   </p>";
    break;
    case 'azul':
     echo "<h1>
     Es azul
     </h1>";
      break;
  default:
    echo "<p>
    No es color
    </p>";
    break;
    }
$a=0;
    while ($a <= 10) {
        echo "valor de a es ".$a;
        $a++;
    }
echo '<img src="img/pumas.png">';

    for ($i=1; $i < 5 ; $i++) {
      echo '<img class= "img" id="imagen'.$i.'"src="img/pumas.png">';
    }

    $vasos = array ("tarros", "copas", "caballitos", "schooner", "yarda");
    foreach ($vasos as $vaso) {
      echo "El vaso es : ".$vaso."<br>";
    }

 ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>