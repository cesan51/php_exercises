<?php
$c1=300000;
$c2=250000;
$c3=125000;
echo "TIENDA DEL PARQUE";
echo "<BR>";
echo "Bienvenido a la tienda del parque";
echo "<BR>";
echo "Recuerde que por compra mayor a 150000 pesos recibes un descuento del 20% en tu compra";
echo "<BR>";
echo "$c1";
echo "<BR>";
echo "$c2";
echo "<BR>";
echo "$c3";
echo "<BR>";
echo "<BR>";
echo "Tu valor a pagar es: ";
echo "<BR>";
echo $c1+$c2+$c3;
echo "<BR>";
echo "<BR>";
if ($c1+$c2+$c3>=150000) {
  echo "Obtienes un descuento del 20% solo pagas";
  echo "<BR>";
  echo ($c1+$c2+$c3)-($c1+$c2+$c3*0.20);
}
echo "<BR>";
echo "<BR>";
echo "GRACIAS POR VISITAR LA TIENDA DEL PARQUE";
 ?>
