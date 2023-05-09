<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoclub";


$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into actores(id_actor, nombre, nacion, sexo) 
  values('', '$_REQUEST[nombre]', '$_REQUEST[nacion]', '$_REQUEST[sexo]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El Actor fue ingresado.";

?>
