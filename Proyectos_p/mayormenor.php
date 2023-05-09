<?php
$num1=10;
$num2=6;
$num3=5;
If($num1 > $num2){
If($num1 > $num3){
echo 'numero ' . $num1 . ' es mayor';
} else {
echo 'numero ' . $num3 . ' es menor';
}
} else {
If($num2 > $num3){
echo 'numero ' . $num2 . ' es mayor';
} else {
echo 'numero ' . $num3 . ' es menor';
}
}
?>
