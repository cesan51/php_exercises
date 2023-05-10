<?php

include('db.php');  #se incluye la bd

#verifica si existe la conexión
#Y sis es asi recibe y almacena


if (isset($_POST['save_task'])) {
  $title = $_POST['title'];    #recibe la info enviada mediante el metodo post y lo almacena en una variable
  $description = $_POST['description'];

  #recepción de los datos con metodo POST
  #apartir de esto la info sera enviada a la BD con SQL
  $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";

  #result almacena el resultado del envio
  #apartir de este se pueden manejar mensajes sobre el proceso como save o failed
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully'; #almacenamiento de mensaje
  $_SESSION['message_type'] = 'success';    #color

  #creacion de redirección
  header('Location: index.php');  


  #en php se almacenan los datos, pero no se pueden enviar mensajes como tal
  #por tal motivo se crean sesiones para el almacenamiento y verific. de los mismos

}

?>
