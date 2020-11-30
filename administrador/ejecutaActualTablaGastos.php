<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("../connect_db.php");
	$sentencia="update compras set unidades='$unidades', coste='$coste', fechaCompra='$fecha', currelas_DNI='$dni', Material_campo_idMaterial_campo='$idcampo', Material_laboratorio_idLab='$idlab'  where idcompras='$ids'";
				//UPDATE compras SET unidades = '501', 		coste = '105', fechaCompra='2020-11', currelas_DNI='2132', Material_campo_idMaterial_campo = '1', 		Material_laboratorio_idLab = '' WHERE (`idcompras` = '10');

	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: ../Tablas/CompraMaterial.php");
		
		echo "<script>location.href='../Tablas/CompraMaterial.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../Tablas/CompraMaterial.php'</script>";

		
	}
?>