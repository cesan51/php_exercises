<html>
<head>
<title>Buscar</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pvideoclub";

$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select nombre, apellido, mail, codigocurso
                        from aprendiz where mail='$_REQUEST[mail]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Apellido:".$reg['apellido']."<br>";
  echo "Email:".$reg['mail']."<br>";
  echo "Curso:".$reg['codigocurso']."<br>";

}
else
{
  echo "No existe un alumno con ese mail.";
}
mysqli_close($conexion);
?>
</body>
</html>
