<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
#Las dos lineas siguiente de momento las voy a comentar porque quiero que me lleve al administrador a la pagina
#normal en el caso de que tenga contraseña de ususario.
/*
elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}*/
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Invntario del material de campo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Jorge Miranda Izcara">

	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<?php
	include("../include/miestilo.php");
	?>
</head>

<body data-offset="40" background="../images/procesionaria.jpg" style="background-attachment: fixed">
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
		include("../include/menu.php");
		?>

		<!-- ======================================================================================================================== -->
		<div class="row">



			<div class="span12">

				<div class="caption">

					<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
					<h2 class="titulo"> Inventario del material de campo.</h2>
					<div class="well well-small animacion">
						<hr class="soft" />
						<h4>Material de Campo</h4>
						<div class="row-fluid">




							<?php

							require("../connect_db.php");
							$sql = ("SELECT * FROM calabazanos.material_campo");

							//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
							$query = mysqli_query($mysqli, $sql);

							echo "<table border='1'; class='table table-hover';>";
							echo "<tr class='warning'>";
							echo "<td>Nombre del Material</td>";
							echo "<td>Descripcion</td>";
							echo "<td>Unidades en el inventario</td>";
							echo "<td>Su dedicacion</td>";
							echo "<td>Proveedor</td>";
							echo "</tr>";
							?>

							<?php
							while ($arreglo = mysqli_fetch_array($query)) {
								echo "<tr class='success'>";
								echo "<td>$arreglo[1]</td>";
								echo "<td>$arreglo[2]</td>";
								echo "<td>$arreglo[3]</td>";
								echo "<td>$arreglo[4]</td>";
								echo "<td>$arreglo[5]</td>";
								echo "</tr>";
							}

							echo "</table>";
							?>
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
		<hr class="soften" />
		<footer class="footer">

			<hr class="soften" />
			<p>&copy; Copyright Jorge Miranda <br /><br /></p>
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