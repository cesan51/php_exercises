<<?php

$Nota1 = $_POST["p"];
$Nota2 = $_POST["s"];
$Nota3 = $_POST["t"];

$n1=$Nota1*0.20;
$n2=$Nota2*0.20;
$n3=$Nota3*0.60;
$promedio= $n1+$n2+$n3;

echo "INFORMACIÓN";
echo "<br>";
echo "Tu primer nota vale el 30%";
echo "<br>";
echo "Nota 1: ".$Nota1;
echo "<br>";
echo "Nota con el 30% :".$n1;
echo "<br>";
echo "Tu segunda nota vale el 30%";
echo "<br>";
echo "Nota 2: ".$Nota2;
echo "<br>";
echo "Nota con el 30% :".$n2;
echo "<br>";
echo "Tu tercera nota vale el 40%";
echo "<br>";
echo "Nota 3: ".$Nota3;
echo "<br>";
echo "Nota con el 40% :".$n3;
echo "<br>";

echo "Este es el promedio sumando tus tres notas y dividiendolas por el numero tres :". $promedio;
echo "<br>";

 ?>
