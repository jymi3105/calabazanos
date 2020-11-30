<!DOCTYPE html>

<?php
session_start();
#Aqui controlo si existe la variable de sesion, y si no existe pues me vuelve a enviar al index.php
if (@!$_SESSION['user']) {
	header("Location:index.php");
	#y en el caso de que exista, pero tenga un rol 1, pues le llevar al pagina del administrador
}
#Las dos lineas siguiente de momento las voy a comentar porque quiero que me lleve al administrador a la pagina
#normal en el caso de que tenga contraseña de ususario.
/*elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}*/
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Pagina principal de usuario comun y corriente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Jorge Miranda">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<?php
		include("include/miestilo.php");
	?>
</head>

<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
	<div class="container">
		<header class="header">
			<div class="row">
				<?php
				include("include/cabecera.php");
				?>
			</div>
		</header>

		<!-- Navbar
    ================================================== -->
		<?php

		include("include/menu2.php");
		include("include/cabeceraIndex2.php");
		?>
		<!-- ======================================================================================================================== -->

		<h3>Escoge el tipo de compra</h3>
		<div class="row" style="text-align:center">
			<form class="navbar-search form-inline" style="margin-top:6px">

				<div class="compras">
					<a href="./updates/compraMatLabExistente.php">Comprar material de laboratorio Existente en inventario y comprar</a>
					<a href="./updates/compraMatLabNuevo.php">Dar de alta nuevo material de laboratorio y comprar</a>
					<a href="./updates/compraMatCampoExistente.php">Comprar material de campo Existente en inventario</a>
					<a href="./updates/compraMatCampoNuevo.php">Dar de alta nuevo material de campo y comprar</a>
				</div>

			</form>
		</div>

		<!-- Footer
      ================================================== -->

		<?php
		include("include/pie.php");
		?>

	</div><!-- /container -->


</body>

</html>