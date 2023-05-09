<?php
echo "EL COSTO DEL TRANSPORTE";
echo "<br>";
echo "en este programa calcularemos el precio del consumo de gasolina por litros dependiendo los kilometros recorridos y el tiempo gastado";
echo "<br>";
echo "por tal motivo, necesito que nos ayudes con algunos datos sobre el viaje";
echo "<br>";
$k=270;
$gl=1.3;
$d=150;
$t=3;
$tt=3.4;
$tm=40;
$th=$t*60;
$ttt=$th+$tm;

$o=100;

$cgl=$d/$gl;
$cglt=$cgl/$k;
$cgltt=$cglt*$o;

$dE=$d/$k;
$dE2=$dE*$o;

$vm=$k/$tt;
$ms=$k*1000;
$seg=$ttt*60;
$vm2=$ms/$seg;

echo "total de kilometros recorridos";
echo "<br>";
echo "el precio de la gasolina por litro";
echo "<br>";
echo "la cantidad de dinero gastado en combustible";
echo "<br>";
echo "el tiempo que se ha tardado el viaje en horas y minutos";
echo "<br>";
echo "ya que tenemos las respuestas dadas, estos son los resultados";
echo "<br>";
echo "consumo de gasolina en (litros y euros), por cada 100 km";
echo "<br>";
echo "consume",$cgltt,"litros de gasolina",$dE2,"euro por cada 100 km";
echo "<br>";
echo "consumo de gasolina en (litros y euros), por cada km";
echo "<br>";
echo "consume",$cglt,"litros de gasolina y",$dE,"euros, por cada km";
echo "<br>";
echo "velocidad media en k/h y m/s";
echo "<br>";
echo "su velocidad media en k/h y m/s es: ";$vm;
echo "<br>";
echo "y su velocidad media en m/s es: ",$vm2;
 ?>
