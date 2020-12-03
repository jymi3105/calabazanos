<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
} elseif ($_SESSION['passAd'] == '') {
	header("Location:../index2.php");
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Actualizacion de usuario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jorge Miranda Izcara">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
    <?php
    include("../include/miestilo.php");
    ?>
</head>

<body data-offset="40" background="../images/monedas.jpg" style="background-attachment: fixed">
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


		<?php
		include("../include/menuAdmin.php");

		?>

		<!-- ======================================================================================================================== -->
		<div class="row">
			<div class="span12">
				<div class="caption">
					<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
					<h2 class="titulo"> Administración de materiales de trabajo de campo</h2>
					<div class="well well-small">
						<hr class="soft" />
						<h4>Edición de materiales</h4>
						<div class="row-fluid">

							<?php
							extract($_GET);
							require("../connect_db.php");

							$sql = "SELECT * FROM compras WHERE idcompras='$id'";
							//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
							$ressql = mysqli_query($mysqli, $sql);
							while ($row = mysqli_fetch_row($ressql)) {
								$ids = $row[0];
								$unidades = $row[1];
								$coste = $row[2];
								$fecha = $row[3];
								$dni = $row[4];
								$idcampo = $row[5];
								$idlab = $row[6];
							}
							?>

							<form action="ejecutaActualTablaGastos.php" method="post">
								Unidades <br><input type="text" name="unidades" value="<?php echo $unidades ?>"><br>
								Precio pagado<br> <input type="text" name="coste" value="<?php echo $coste ?>"><br>
								Fecha de la compra<br> <input type="text" name="fecha" value="<?php echo $fecha ?>"><br>
								Dni del comprador <br><input type="text" name="dni" value="<?php echo $dni ?>"><br>
								id del material de campo <br><input type="text" name="idcampo" value="<?php echo $idcampo ?>"><br>
								id del material de campo <br><input type="text" name="idlab" value="<?php echo $idlab ?>"><br>
								<input style="visibility: hidden;" type="text" name="ids" value="<?php echo $ids ?>">
								<br>
								<input type="submit" value="Guardar" class="btn btn-success btn-primary">
							</form>

							<div class="span8">
							</div>
						</div>
						<br />
					</div>
					<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
				</div>

			</div>
		</div>
		<!-- Footer
      ================================================== -->
		<?php
		include("../include/pie.php");
		?>
	</div><!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
</body>

</html>