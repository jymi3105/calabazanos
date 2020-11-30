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
	<title>Actualizacion de materiales de laboratorio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jorge Miranda Izcara">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
    <?php
    include("../include/miestilo.php");
    ?>
</head>

<body data-offset="40" background="../images/laboratorioimg.jpg" style="background-attachment: fixed">
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
					<h2> Administración de materiales de laboatorio</h2>
					<div class="well well-small">
						<hr class="soft" />
						<h4>Edición de materiales</h4>
						<div class="row-fluid">

							<?php
							extract($_GET);
							require("../connect_db.php");

							$sql = "SELECT * FROM material_laboratorio WHERE idLab=$id";
							//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
							$ressql = mysqli_query($mysqli, $sql);
							while ($row = mysqli_fetch_row($ressql)) {
								$ids = $row[0];
								$nombre = $row[1];
								$descripcion = $row[2];
								$unidades = $row[3];
								$proveedor = $row[4];
								$tipo = $row[5];
							}
							?>

							<form action="ejecutaactualLaboratorio.php" method="post">
								Nombre del producto <br><input type="text" name="nombre" value="<?php echo $nombre ?>" readonly="readonly"><br>
								Descripcion del producto<br> <input type="text" name="descripcion" value="<?php echo $descripcion ?>"><br>
								Unidades en el almacen<br> <input type="text" name="unidades" value="<?php echo $unidades ?>"><br>
								Proveedor<br> <input type="text" name="proveedor" value="<?php echo $proveedor ?>"><br>
								Tipo<br> <input type="text" name="tipo" value="<?php echo $tipo ?>">
								<input style="visibility: hidden;" type="text" name="id" value="<?php echo $ids ?>">
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