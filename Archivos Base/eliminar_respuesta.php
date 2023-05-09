<html>
<head>
<title>Eliminar</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sena";

$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion, "select nombre, apellido, mail, codigocurso from aprendiz
                        where mail='$_REQUEST[mail]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"delete from aprendiz where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:".mysqli_error($conexion));
  echo "Se efectuó el borrado del alumno con dicho mail.";
}
else
{
  echo "No existe un alumno con ese mail.";
}
mysqli_close($conexion);
?>
</body>
</html>