<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoclub";

$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select id_actor, nombre, nacion, sexo from actores") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  echo "ID:".$reg['id_actor']."<br>";
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Nacion:".$reg['nacion']."<br>";
  echo "Sexo:".$reg['sexo']."<br>";
  echo "<br>";
  echo "<hr>";
}

mysqli_close($conexion);
echo "El actor fue ingresado";
?>
