<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Actualizacion de usuario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jorge Miranda Izcara">

	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	</head>

<body data-offset="40" background="../images/fondotot.jpg" style="background-attachment: fixed">
	<div class="container">
		<header class="header">
			<div class="row">
				<?php
				include("../include/cabecera.php");
				?>
			</div>
		</header>

		<!-- Navbar
    ================================================== -->


		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<div class="nav-collapse">
						<ul class="nav">
							<li class=""><a href="adminUsuarios.php">ADMINISTRADOR DEL SITIO</a></li>


						</ul>
						<form action="#" class="navbar-search form-inline" style="margin-top:6px">

						</form>
						<ul class="nav pull-right">
							<li><a href="">Bienvenido o bienvenida <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
							<li><a href="../desconectar.php"> Cerrar Cesión </a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div>

		<!-- ======================================================================================================================== -->
		<div class="row">
			<div class="span12">
				<div class="caption">
					<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
					<h2> Administración de usuarios registrados</h2>
					<div class="well well-small">
						<hr class="soft" />
						<h4>Edición de usuarios</h4>
						<div class="row-fluid">

							<?php
							extract($_GET);
							require("../connect_db.php");

							$sql = "SELECT * FROM currelas WHERE dni=$id";
							//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
							$ressql = mysqli_query($mysqli, $sql);
							while ($row = mysqli_fetch_row($ressql)) {
								$dni = $row[0];
								$usuario = $row[1];
								$contrasenia = $row[2];
								$email = $row[3];
								$nombre = $row[4];
								$apellidos = $row[5];
								$pasadmin = $row[6];
								$puesto = $row[7];
								$coche = $row[8];
								$fechaA = $row[9];
							}
							?>

							<form action="ejecutaactualizar.php" method="post">
								Dni<br><input type="text" name="id" value="<?php echo $dni ?>" readonly="readonly"><br>
								Usuario<br> <input type="text" name="usuario" value="<?php echo $usuario ?>"><br>
								Password usuario<br> <input type="text" name="contrasenia" value="<?php echo $contrasenia ?>"><br>
								Correo usuario<br> <input type="text" name="email" value="<?php echo $email ?>"><br>
								Nombre<br> <input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
								Apellidos<br> <input type="text" name="apellidos" value="<?php echo $apellidos ?>"><br>
								Pssword administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin ?>"><br>
								Puesto<br> <input type="text" name="puesto" value="<?php echo $puesto ?>"><br>
								Coche<br> <input type="text" name="coche" value="<?php echo $coche ?>"><br>
								Fecha Alta<br> <input type="text" name="fechaA" value="<?php echo $fechaA ?>"><br>

								<br>
								<input type="submit" value="Guardar" class="btn btn-success btn-primary">
							</form>

							<div class="span8">
							</div>
						</div>
						<br />
						<!--EMPIEZA DESLIZABLE-->
						<!--TERMINA DESLIZABLE-->
					</div>
					<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
				</div>

			</div>
		</div>
		<!-- Footer
      ================================================== -->
		<hr class="soften" />
		<footer class="footer">

			<hr class="soften" />
			<p>&copy; Jorge Miranda Izcara en DAW2 <br /><br /></p>
		</footer>
	</div><!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
</body>

</html>