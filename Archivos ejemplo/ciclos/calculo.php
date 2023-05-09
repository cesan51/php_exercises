<?php   
$numero = $_POST['numero']; 
$contador=1;

    while ($contador<=10)
	{
		echo "$numero * $contador =".$contador*$numero."<br/>";
		$contador++;
	}
   echo "<p>Tabla de multiplicar del $numero presentada correctamente.</p>
         <p><a href='mientras.html'>VOLVER</a></p>";  
?>   
