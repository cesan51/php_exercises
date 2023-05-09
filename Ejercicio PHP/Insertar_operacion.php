<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sena";


$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into aprendiz(nombre, apellido, mail, codigocurso) values 
                       ('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[mail]', '$_REQUEST[codigocurso]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El alumno fue Ingresado.";

?>
