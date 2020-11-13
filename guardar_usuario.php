<?php

include("includes/db.php");
if (isset($_POST['save_user'])) {
   $dni = $_POST['dni'];
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $tipo = $_POST['tipo'];

   $query = "INSERT INTO usuarios(DNI, nombre, apellidos, tipo) VALUES('$dni', '$nombre', '$apellidos', '$tipo')";
   $result = mysqli_query($conn, $query);
   if (!$result) {
      die('Ha sido fallido');
   }

   $_SESSION['message'] = 'Usuario guardado';
   $_SESSION['message_type'] = 'success';
   header("Location: index.php");
}
