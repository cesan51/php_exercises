<?php
$n1=2;
$n2=6;
echo"HOLA";
echo"<br>";
echo "dados los numeros, sumarlos, restarlos, multiplicarlos y dividirlos, dependiendo de las propiedades conmutativas";
echo "<br>";
if($n1>$n2) {
$s=$n1+$n2;
$r=$n1-$n2;
$m=$n1*$n2;
$d=$n1/$n2;
}
if($n2>$n1){
$s=$n2+$n1;
$r=$n2-$n1;
$m=$n2*$n1;
$d=$n2/$n1;
}
echo"la suma de los dos numeros es:".($s);
echo"<br>";
echo"la resta de los dos numeros es:".($r);
echo"<br>";
echo "la multiplicacion de los dos numeros es:".($m);
echo"<br>";
echo "la division de los dos numeros es:".($d);
echo"<br>";
echo "GRACIAS, HASTA PRONTO."
 ?>
