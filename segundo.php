<?php
//Creamos 3 variables y mostramos.
$nombre="Oriana";
$hora=date("H:i:s");
$fecha=date("d/m/y");
$precio=5;
$cantidad=3;

//Definimos una variable constante de forma distinta en cada una.
define('MINOMBRE',"Franco");
const OTRONOMBRE="PEPE";

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Hola <?=$nombre;?></p>
<p>Estas a  <?=$fecha;?></p>
<p>Y son las  <?=$hora;?></p>
<p>El resultado de la multiplicacion es  <?=$precio*$cantidad;?></p>
<p><?="mi nombre es ",MINOMBRE, "y el otro es ",OTRONOMBRE; ?></p>

</body>
</html>