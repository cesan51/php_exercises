<?php
$n1=3;
$n2=3;
$n3=6;
$calificacion=($n2+$n2+$n3)/3;
echo"vamos a saber tu nota segun tus calificaciones";
echo"<br>";
echo"tu calificación es:".($calificacion);
echo"<br>";
if($calificacion>0&$calificacion<3) {
echo "deficiente";
}
  if($calificacion>3&$calificacion<5) {
  echo "insuficiente";
}
if($calificacion>5&$calificacion<6) {
echo"suficiente";
}
if($calificacion>6&$calificacion<7) {
echo"bien";
}
if($calificacion>7&$calificacion<9) {
  echo "notable";
}
if($calificacion>9&$calificacion<10) {
  echo"sobresaliente";
}
?>
