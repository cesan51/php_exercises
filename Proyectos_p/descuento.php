<?php
echo"Hola bienvenidos a su Boutique SHOES, deseamos que tenga un maravilloso día. ";
echo "<br>";
$dto=0.20;
$pg=50000;
$tt=$dto*$pg;
echo"el total de tu compra sin descuento es:".($pg);
echo "<br>";
echo"el descuento de tu compra es de:".($tt);
echo "<br>";
$tr=$pg-$tt;
echo"tu compra con descuento es de:".($tr);
echo"<br>";
echo "Gracias por tu compra";
 ?>
