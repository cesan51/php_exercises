<html>
<head>
<title>Listar Aprendiz</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sena";

$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select nombre, apellido, mail, codigocurso
                        from aprendiz") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Apellido:".$reg['apellido']."<br>";
  echo "Mail:".$reg['mail']."<br>";
  echo "Curso:".$reg['codigocurso']."<br>";
  echo "<br>";
  echo "<hr>";
}

mysqli_close($conexion);

?>

</body>
</html>