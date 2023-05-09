<?php
require 'conexion2.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];


	$insert = "INSERT INTO datos_producto ( Nombre, Precio, Fecha_creacion)
                 VALUES ('$nombre','$precio','$fecha')";

	$query = mysqli_query ($conex, $insert);

	echo "<p>Datos Guardados Exitosamente.</p>
       <p><a href='inventario.html'>REGRESAR</a></p>";

?>
