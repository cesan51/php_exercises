<?php include("db.php"); ?>   <!--Se incluye la conexión a la bd-->

<?php include('includes/header.php'); ?><!--include del header del codigo-->  <!--incluye extension html 5-->

<!--Se puede añadir css de bootstrap y js--->
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>    <!--SI EXISTE.    este mensaje almacenado en sesión se pinta en el html-->
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <?php session_unset(); } ?>    <!-- Elimina las variables almacenadas en sesion -->


      <!-- ADD TASK FORM -->
      <!--espacio para el formulario-->


      <div class="card card-body">
        <form action="save_task.php" method="POST">  <!--envio de info a save con met post-->
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM task";     #Seleccion de todos los datos de la tabla
          $result_tasks = mysqli_query($conn, $query);   #se crea la conexión a la bd con el query y se almacenan todos los datos en results  
          #bucle para recorrer los datos

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>   
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">   <!--enlaces con ident de id pra enviar el dato y ser tratado desde modificar-->
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?> <!--include footer-->
