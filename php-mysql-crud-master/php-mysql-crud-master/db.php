<?php
session_start(); #esta es una inicialización se sesion, todo se guarda dentro del servidor

$conn = mysqli_connect(      #objeto de conección variable de almac $conn
  'localhost',      #ubicación
  'root',           #clave de usuario
  'password123',    #contraseña por default vacia
  'php_mysql_crud'  #nombre de la bd de mysql
) or die(mysqli_error($mysqli));

#puedes comprobar la conexion con un if

# if (isset($conn)){
#  echo 'db is connected'
#}

?>


