<?php

	$dni=$_POST['dni'];
	$usuario=$_POST['usuarioR'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$email=$_POST['email'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$puesto=$_POST['puesto'];
	$coche=$_POST['coche'];
	$fechaA=$_POST['fechaA'];



	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM currelas WHERE usuario='$usuario'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='index.php'</script>";
			}else{
				
				require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO currelas (DNI, usuario, contrasenia, email, nombre, apellidos, puesto, coche, fecha_alta) VALUES ('$dni', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$puesto', '$coche', '$fechaA');");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index.php'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Las contraseñas son incorrectas");</script> ';
			echo "<script>location.href='index.php'</script>";
		}

	
?>