<?php   
require 'conexion.php';

$id = $_POST['identificacion']; 
$usuario = $_POST['usuario']; 
$nombre = $_POST['nombreape'];  
$correo = $_POST['correo'];

	$insert = "INSERT INTO usuarios (ID,usuario,NombreApellido,correo) 
                 VALUES ('$id','$usuario','$nombre','$correo')";
    
	$query = mysqli_query ($conex, $insert);  
    	
	echo "<p>Datos Guardados Exitosamente.</p>
         <p><a href='usuarios.html'>VOLVER</a></p>";  
   
?>   
