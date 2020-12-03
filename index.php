<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto Inventario de calabazanos</title>
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
    <?php
		include("include/miestilo.php");
	?>
</head>

<body background="images/golf.png" style="background-attachment: fixed">
	<center>
		<div>
			<h2 class="titulo" style="color: #0000FF; ">Inicio de sesión</h2>
			<center>
				<div class="Ingreso">
					<table border="0" align="center" valign="middle">
						<tr>
							<td rowspan=2>
								<form class="login" action="validar.php" method="post">
								
									<table  border="0">

										<tr>
											<td><label style="font-size: 14pt"><b>Usuario: </b></label></td>
											<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="usuario"></td>
										</tr>
										<tr>
											<td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
											<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td>
										</tr>
										<tr>
											<td></td>
											<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
										</tr>
								</table>
								</form>
					<br>
					<!-- formulario registro -->

					<form class="registro" method="post" action="registro.php">
						<fieldset>
							<legend style="font-size: 18pt"><b>Registro</b></legend>
							<div>
								<label style="font-size: 14pt"><b>Ingresa su dni</b></label>
								<input type="number" name="dni" required placeholder="Ingresa tu dni" />
							</div>
							<div>
								<label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu usuario</b></label>
								<input type="text" name="usuarioR" required placeholder="Ingresa el usuario" />
							</div>
							<div>
								<label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
								<input type="password" name="pass" required placeholder="Ingresa contraseña" />
							</div>
							<div>
								<label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
								<input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
							</div>
							<div>
								<label style="font-size: 14pt"><b>Ingresa tu email</b></label>
								<input type="email" name="email" placeholder="Ingresa tu email" />
							</div>
							<div>
								<label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu nombre</b></label>
								<input type="text" name="nombre" required placeholder="Ingresa el nombre" />
							</div>
							<div>
								<label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu apellidos</b></label>
								<input type="text" name="apellidos" placeholder="Ingresa tus apellidos" />
							</div>
							<div>
								<label style="font-size: 14pt"><b>Que puesto desempeña</b></label>
								<select name="puesto">
									<option value="">Elije una opcion</option>
									<option value="Campo">Campo</option>
									<option value="Tecnico de laboratorio">Tecnico de laboratorio</option>
									<option value="Auxiliar de laboratorio">Auxiliar de laboratorio</option>
									<option value="Administrativo">Administrativo</option>
								</select>

							</div>
							<div>
								<label style="font-size: 14pt; color: #FFFFFF;"><b>¿Dispone de coche de empresa?</b></label>
								<select name="coche">
									<option value="">Elige una opción.</option>
									<option value="NO">NO</option>
									<option value="SI">SI</option>
								</select>
							</div>
							<div>
								<label style="font-size: 14pt"><b>¿Cual fue su fecha de alta?</b></label>
								<input type="text" name="fechaA" placeholder="Pon este formato aaaa-mm-dd" />
							</div>

				</div>

				<input class="btn btn-danger" type="submit" name="submit" value="Registrarse" />

				</fieldset>
				</form>
		</div>
		<?php
		if (isset($_POST['submit'])) {
			require("registro.php");
		}
		?>
		<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div>
	</center>
	</div>
	</center>


</body>

</html>