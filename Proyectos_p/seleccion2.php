<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$sexo= $_POST["sexo"];
$rango=$_POST["rango"];

echo "Hola ".$nombre."<br>";
echo "Tus apellidos son: ".$apellidos."<br>";
echo "Tu sexo es: ".$sexo."<br>";
echo "Tu rango de edad es : ".$rango."<br>";
echo "Gracias por llenar todos los campos de datos";

 ?>
