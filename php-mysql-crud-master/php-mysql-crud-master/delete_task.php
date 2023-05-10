<?php

include("db.php");     #se trae la bd

#validación si se trae el id
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id";     #se almacena la consulta en la bd
  $result = mysqli_query($conn, $query);  #se envia el metodo a la bd
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
