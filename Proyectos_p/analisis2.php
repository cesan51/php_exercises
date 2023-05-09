<?php
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$imc=($peso/($altura*$altura));

echo "Hola ".$nombre."<br>";
echo "Tu edad es: ".$edad."<br>";
echo "Tu altura es: ".$altura."<br>";
echo "Tu peso es : ".$peso."<br>";
echo "Tu indice de masa corporal es: ".$imc."<br>";

if($imc>0&$imc<15) {
echo "Delgadez muy severa";
}
  if($imc>15&$imc<15.9) {
  echo "Delgadez severa";
}
if($imc>16&$peso<18.4) {
echo"Delgadez";
}
if($imc>18.5&$imc<24.9) {
echo"Peso saludable";
}
if($imc>25&$imc<29.9) {
  echo "Sobrepeso";
}
if($imc>30&$imc<34.9) {
  echo"Obesidad moderada";
}
if($imc>35&$imc<39.9) {
  echo "Obesidad severa";
}
if($imc>40&$imc<100) {
  echo"Obesidad muy severa (obesidad mórbida)";
}
 ?>
