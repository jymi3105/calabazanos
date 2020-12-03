<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}elseif ($_SESSION['passAd']=='') {
	header("Location:../index2.php");
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
					<h2 class="titulo"> Administración de usuarios registrados</h2>
					<div class="well well-small">
						<hr class="soft" />
						<h4>Tabla de Usuarios</h4>
						<div class="row-fluid">
							<?php

							require("../connect_db.php");
							$sql = ("SELECT * FROM material_laboratorio");

							//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
							$query = mysqli_query($mysqli, $sql);

							echo "<table border='1'; class='table table-hover';>";
							echo "<tr class='warning'>";
							echo "<td>Nombre del material</td>";
							echo "<td>Descripcion</td>";
							echo "<td>Unidades</td>";
							echo "<td>Proveedor</td>";
							echo "<td>Tipo</td>";
							echo "<td>Editar</td>";
							echo "<td>Borrar</td>";
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
								
								echo "<td><a href='actualizarLaboratorio.php?id=$arreglo[0]'><img src='../images/actualizar.gif' class='img-rounded'></td>";
								echo "<td><a href='adminMaterialLaboratorio.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";
								echo "</tr>";
							}

							echo "</table>";
#Con este metodo saco todas las variables
							extract($_GET);
							if (@$idborrar == 2) {

								$sqlborrar = "DELETE FROM material_laboratorio WHERE idLab=$id";
								$resborrar = mysqli_query($mysqli, $sqlborrar);
								echo '<script>alert("REGISTRO ELIMINADO")</script> ';
							
								echo "<script>location.href='adminMaterialLaboratorio.php'</script>";
							}

							?>
							<div class="span12">

							</div>
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