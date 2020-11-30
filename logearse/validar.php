
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM currelas WHERE usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['contraseniaAd']){
			$_SESSION['dni']=$f2['DNI'];
			$_SESSION['user']=$f2['usuario'];
			#$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='administrador/admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM currelas WHERE usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contrasenia']){
			$_SESSION['dni']=$f['DNI'];
			$_SESSION['user']=$f['usuario'];
			#$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>