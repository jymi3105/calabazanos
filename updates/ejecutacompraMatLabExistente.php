<?php

$usuario = $_POST['usuario'];
$producto = $_POST['producto'];
$unidades = $_POST['unidades'];
/*La provincia ira destinado al insert de la tabla de pedidos*/
$precio = $_POST['precio'];

/*require("../connect_db.php");
$sql = ("select currelas.DNI from currelas
where usuario='$usuario';");
$query = mysqli_query($mysqli, $sql);
$dniUsuario = '';
while ($arreglo = mysqli_fetch_array($query)) {
    $dniUsuario = $arreglo[0];
}*/
$dniUsuario = $_POST['dniUsuario'];

require("../connect_db.php");

if ($producto == '0') {
    echo ' <script language="javascript">alert("Elije el producto que deseas comprar");</script> ';
    echo "<script>location.href='compraMatLabExistente.php'</script>";
} else {
    require("../connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    /*Tengo que impedir que se incluyan productos ya existentes*/
    mysqli_query($mysqli, "UPDATE calabazanos.material_laboratorio SET unidades = unidades + '$unidades' WHERE (nombreLab = '$producto');");

    $sql = ("SELECT idLab FROM material_laboratorio
        WHERE nombreLab='$producto';");
    $query = mysqli_query($mysqli, $sql);
    $idProducto = 0;
    while ($arreglo = mysqli_fetch_array($query)) {
        $idProducto = $arreglo[0];
    }

    mysqli_query($mysqli, "INSERT INTO compras (unidades, coste, currelas_DNI, Material_laboratorio_idLab) VALUES ('$unidades', '$precio', '$dniUsuario', '$idProducto');");

    echo ' <script language="javascript">alert("Compra registrada!!");</script> ';

    echo "<script>location.href='compraMatLabExistente.php'</script>";
}
