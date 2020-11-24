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
	<title>Proyecto Academias</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Joseph Godoy">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>


	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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

		include("include/menu.php");

		?>
		<!-- ======================================================================================================================== -->

		<div id="myCarousel" class="carousel slide homCar">
			<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
				<div class="item active">
					<img src="images/plagas_pinos.jpg" alt="#" style="min-height:250px; max-height:300px; min-width:100%" />
					<div class="carousel-caption">
						<h4>Trabajos de plagas en campo</h4>
						<p>
							recuerde que en esta disciplina la práctica es la que da el dominio en el uso de las herramientas, estaremos siempre a la orden para compartir con usted experiencias y sobretodo para ayudarlo en el aprendizaje.
						</p>
					</div>
				</div>
				<div class="item">
					<img src="images/monochamus.jpg" alt="#" style="min-height:250px; max-height:300px; min-width:100%" />
					<div class="carousel-caption">
						<h4>Trampeos masivos</h4>
						<p>
							La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
						</p>
					</div>
				</div>
				<div class="item">
					<img src="images/laboratorio.jpg" alt="#" style="min-height:250px; max-height:300px; min-width:100%" />
					<div class="carousel-caption">
						<h4>Analisis clinicos en el laboratorio </h4>
						<p>
							No olvide que la clave del éxito en el estudio de las herramientas matemáticas radica en el entendimiento cabal de los conceptos fundamentales y la aplicación razonada enla resolución de problemas.
						</p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		</div>
		<h3>¿Que es lo que quieres hacer?</h3>
		<div class="row" style="text-align:center">
			<form action="#" class="navbar-search form-inline" style="margin-top:6px">
				<ul class="nav pull-right">

					<li><a href="#">Tomar algun material</a></li>
					<li><a href="inventarioCampo.php">Ver inventario de campo</a></li>
					<li><a href="#">Ver inventario del laboratorio</a></li>
					<li><a href="#">Has comprado algo</a></li>

				</ul>
			</form>
		</div>

		<!-- Footer
      ================================================== -->
		<footer class="footer">

			<hr class="soften" />
			<p>&copy; Jorge Miranda Izcara de DAW2 <br /><br /></p>
		</footer>
	</div><!-- /container -->

	</style>
</body>

</html>