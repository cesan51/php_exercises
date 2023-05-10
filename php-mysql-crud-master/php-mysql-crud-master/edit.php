<?php
include("db.php");   #include de bd
$title = '';
$description= '';

#comprobacion de exist
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";    #sql
  $result = mysqli_query($conn, $query);  #toma la conexion y la consulta y devuelve un resultado
  if (mysqli_num_rows($result) == 1) {     #si comprobando la cant de filas de resultado teniendo al menos una tarea coincidiendo con el id traer
    $row = mysqli_fetch_array($result);   #se toma el dato para mostrar por la fila
    $title = $row['title'];
    $description = $row['description'];
  }
}

#validación
if (isset($_POST['update'])) {
  $id = $_GET['id'];    #se trae el dato desde el punto anterior
  $title= $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE task set title = '$title', description = '$description' WHERE id=$id";  #sql
  mysqli_query($conn, $query);    #conexión bd
  $_SESSION['message'] = 'Task Updated Successfully';    #mensaje
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');    #ubicación del mensaje
}

#creacion de formulario dentro de php
?>
<?php include('includes/header.php'); ?>   
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">  <!--envio de datos con metodo post a esta misma-->
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">   <!--Ya teniendo los datos se pinta la info obtenida con ?php-->
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">    <!--boton de envio con nombre sencillo para crear update-->
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
