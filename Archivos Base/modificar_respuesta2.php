<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sena";

$conexion=mysqli_connect($servername,$username,$password,$dbname) or
    die("Problemas con la conexión");

mysqli_query($conexion, "update aprendiz
                          set mail='$_REQUEST[mailnuevo]' 
                        where mail='$_REQUEST[mailviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "El mail fue modificado con exito";
?>
</body>
</html>