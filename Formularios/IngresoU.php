<?php
echo "Universidad"."<BR>"."<BR>";
echo "Estos son los datos que ingresaste"."<BR>"."<BR>";


$nombre=$_POST["nombreu"];
$apellido=$_POST["apellidou"];
$carrera=$_POST["carrera"];
$direccion=$_POST["di"];
$puntaje=$_POST["pu"];
$telefono=$_POST["te"];
$jornada=$_POST["jo"];

echo "Datos"."<BR>"."<BR>";

echo "Nombre ".$nombre."<BR>";
echo "Apellido ".$apellido."<BR>";
echo "Puntaje ".$puntaje."<BR>";
echo "Nombre ".$direccion."<BR>";
echo "Nombre ".$telefono."<BR>";
echo "Apellido ".$jornada."<BR>";
echo "Nombre ".$carrera."<BR>"."<BR>";

if ($puntaje>=300) {
  echo "Bienvenido futuro Profesional";
}



 ?>
