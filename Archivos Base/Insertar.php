<html>
<head>
<title>Formulario de Alumno</title>
</head>
<body>
<h1>Registro de Alumnos</h1>
<form action="insertar_operacion.php" method="post">
Ingrese nombre:
<input type="text" name="nombre"><br>
Ingrese apellido:
<input type="text" name="apellido"><br>
Ingrese mail:
<input type="text" name="mail"><br>
Seleccione el curso:
<select name="codigocurso">
<option value="PHP">PHP</option>
<option value="ASP">ASP</option>
<option value="JSP">JSP</option>
</select>
<br>
<input type="submit" value="Registrar">
</form>
</body>
</html>