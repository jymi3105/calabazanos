<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto academias</title>
</head>

<body background="images/golf.jpg" style="background-attachment: fixed">
	<center>
		<div class="tit">
			<h2 style="color: #0000FF; ">Inicio de sesión</h2>
			<center>
				<div class="Ingreso">

					<table border="0" align="center" valign="middle">
						<tr>
							<td rowspan=2>
								<form action="validar.php" method="post">

									<table border="0">

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
						</tr>
					</table>
					</form>
					<br>
					<!-- formulario registro -->

					<form method="post" action="registro.php">
						<fieldset>
							<legend style="font-size: 18pt"><b>Registro</b></legend>
							<div>
								<label style="font-size: 14pt"><b>Ingresa su dni</b></label>
								<input type="text" name="dni" required placeholder="Ingresa tu dni" />
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
								<input type="text" name="email" placeholder="Ingresa tu email" />
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
								<input type="text" name="puesto" placeholder="Puesto que desempeña" />
							</div>
							<div>
								<label style="font-size: 14pt; color: #FFFFFF;"><b>¿Dispone de coche ed empresa?</b></label>
								<input type="text" name="coche" placeholder="Responda SI/NO" />
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