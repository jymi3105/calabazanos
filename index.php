<?php include("includes/db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
   <div class="row">
      <div class="col-md-4">

         <?php
         if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?>  alert-dismissible fade show" role="alert">
              <?php echo $_SESSION['message']; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>

         <?php session_unset(); } ?>

         <div class="card card-body">
            <form action="guardar_usuario.php" method="POST">
               <div class="form-group">
                  <input type="text" name="dni" class="form-control" placeholder="Introduce aqui el dni" autofocus>
               </div>
               <div class="form-group">
                  <input type="text" name="nombre" class="form-control" placeholder="Introduce aqui el nombre" autofocus>
               </div>
               <div class="form-group">
                  <input type="text" name="apellidos" class="form-control" placeholder="Introduce aqui los apellidos" autofocus>
               </div>
               <div class="form-group">
                  <!-- State Button -->
                  <label for="state_id" class="control-label">Dedicacion</label>
                  <select class="form-control" name="tipo" id="state_id">
                     <option value="CAMPO">CAMPO</option>
                     <option value="LABORATORIO">LABORATORIO</option>
                     <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                  </select>
               </div>

               <input type="submit" class="btn btn-success btn-block" name="save_user" value="Guarda usuario">
            </form>
         </div>
      </div>
   </div>
</div>


< <?php include("includes/footer.php") ?>