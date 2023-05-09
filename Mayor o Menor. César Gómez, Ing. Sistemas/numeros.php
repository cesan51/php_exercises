<?php
require 'conexion5.php';

echo "MAYOR O MENOR"."<br>";
echo "Estos son los resultados de los datos ingresados"."<br>"."<br>";
$id = $_POST['id'];
$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];

echo "Datos ingresados por ".$id."<br>"."<br>";


if ($numero1>$numero2) {
echo $numero1." es mayor que ".$numero2;
$insert = "INSERT INTO mayor(identificacion, 	numero_mayor )
               VALUES ('$id','$numero1')";
               $query = mysqli_query ($conex, $insert);

}
elseif ($numero1==$numero2) {
echo $numer1." es igual que ".$numero2;
}
else {
echo $numero1." es menor que ".$numero2;
$insert = "INSERT INTO menor(identificacion, 	numero_menor )
                 VALUES ('$id','$numero1')";
               $query = mysqli_query ($conex, $insert);
}
echo "<br>"."<br>";



if ($numero2>$numero1) {
echo $numero2." es mayor que ".$numero1;
$insert = "INSERT INTO mayor(identificacion, 	numero_mayor )
               VALUES ('$id','$numero2')";
               $query = mysqli_query ($conex, $insert);

}elseif ($numero2==$numero1) {
echo $numer2." es igual que ".$numero1;
}else {
echo $numero2." es menor que ".$numero1;
$insert = "INSERT INTO menor(identificacion, 	numero_menor )
                 VALUES ('$id','$numero2')";
               $query = mysqli_query ($conex, $insert);
}



	echo "<p>Datos Guardados Exitosamente.</p>
       <p><a href='numeros.html'>VOLVER</a></p>";



?>
