<!DOCTYPE html>
<html>
<head>
	<title>Resultado de la suma</title>
</head>
<body>
	<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$suma = $num1 + $num2;

	echo "<p>La suma de $num1 y $num2 es: $suma</p>";
	?>
</body>
</html>
