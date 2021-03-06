<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}

elseif ($_SESSION['passAd']=='') {
	header("Location:../index.php");
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Administrador de la web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jorge Miranda Izcara">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<?php
	include("../include/miestilo.php");
	?>

</head>

<body data-offset="40" background="../images/papeles.jpg" style="background-attachment: fixed">
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
					<h2 class="titulo"> Elige una labor de administrador</h2>

					<div class="well well-small animacion">
						<hr class="soft" />

						<div class="compras">

							<a href="adminUsuarios.php">Administrar usuarios</a>
							<a href="adminMaterialLaboratorio.php">Administrar materiales de laboratorio</a>
							<a href="adminMaterialCampo.php">Administrar materiales de campo</a>
							<a href="../Tablas/CompraMaterial.php">Ver el listado de las compras</a>

						</div>
						<br />
					</div>
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