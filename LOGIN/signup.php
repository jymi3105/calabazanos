<?php

require 'database.php';

$message = '';

if (!empty($_POST['dni']) && !empty($_POST['usuario']) && !empty($_POST['contrasenia']) &&
!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email']) &&
!empty($_POST['puesto']) && !empty($_POST['coche']) && !empty($_POST['fechaAlta']) &&
!empty($_POST['confirm_contrasenia'])){

  $dni = $_POST['dni'];
  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $email = $_POST['email'];
  $puesto=$_POST['puesto'];
  $coche=$_POST['coche'];
  $fechaAlta=$_POST['fechaAlta'];

  $sql = "INSERT INTO currelas (DNI, usuario, constrasenia, nombre, apellidos, email, puesto, coche, fecha_alta) 
  VALUES ('$dni', '$usuario', '$contrasenia', '$nombre', '$apellidos', '$email', '$puesto', '$coche', '$fechaAlta')";
  $stmt = $conn->prepare($sql);


  if ($stmt->execute()) {
    $message = 'Ha creado exitosamente un usuario';
  } else {
    $message = 'Je suis desolé, vous avais faites une error tandi vous faissez une nouvelle perfile';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SignUp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php require 'partials/header.php' ?>

  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>SignUp</h1>
  <span>or <a href="login.php">Login</a></span>

  <form action="signup.php" method="POST">
    <input name="dni" type="text" placeholder="introduzca su DNI con letra">
    <input name="usuario" type="text" placeholder="introduzca su usuario">
    <input name="contrasenia" type="password" placeholder="introduzca su contraseña">
    <input name="nombre" type="text" placeholder="introduzca su nombre">
    <input name="apellidos" type="text" placeholder="introduzca sus apellidos">
    <input name="email" type="text" placeholder="Enter your email">
    <input name="puesto" type="text" placeholder="introduzca su puesto">
    <input name="coche" type="text" placeholder="Di si tiene coche o no(SI/NO)">
    <input name="fechaAlta" type="text" placeholder="introduzca la fecha de alta">
    <input name="confirm_contrasenia" type="password" placeholder="Confirme la contraseña">
    <input type="submit" value="Submit">
  </form>

</body>

</html>
