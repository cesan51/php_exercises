<?php
echo "CALISTENIA"."<BR>"."<BR>";
echo " Gracias a los datos ingresados sabemos que enfoque le podemos dar a tu entrenamiento y perfil"."<BR>"."<BR>";

$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$ciudades=$_POST["ciudades"];
$and=$_POST["an"];

$sex=$_POST["sexo"];
$correo=$_POST["correo"];
$fac=2020;
$edad=$fac-$and;

echo "Estos son los datos del usuario"."<BR>"."<BR>";
echo "Nombres: ". $nombres."<BR>";
echo "Apellidos: ". $apellidos."<BR>";
echo "Ciudad: ".$ciudades."<BR>";
echo "Fecha: ". $and."<BR>";
echo "Genero: ".$sex."<BR>";
echo "Tu edad es: ".$edad."<BR>";
if ($edad>=18) {
  echo " Por lo tanto eres apto para participar con nosotros";
}
else {
  echo " Lastimosamente no puedes participar en esta Portal Web";
}
 ?>
