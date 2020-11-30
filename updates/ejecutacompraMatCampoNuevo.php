<?php

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$unidades = $_POST['unidades'];
/*La provincia ira destinado al insert de la tabla de pedidos*/
$dedicacion = $_POST['dedicacion'];
$proveedor = $_POST['proveedor'];
$precio = $_POST['precio'];

require("../connect_db.php");
$sql = ("select currelas.DNI from currelas
where usuario='$usuario';");
$query = mysqli_query($mysqli, $sql);
$dniUsuario = '';
while ($arreglo = mysqli_fetch_array($query)) {
    $dniUsuario = $arreglo[0];
}

require("../connect_db.php");

if ($dedicacion == '0') {
    echo ' <script language="javascript">alert("Elije a que se va a dedicar el material");</script> ';
    echo "<script>location.href='compraMatCampoNuevo.php'</script>";
} else {
    require("../connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    /*Tengo que impedir que se incluyan productos ya existentes*/
    mysqli_query($mysqli, "INSERT INTO material_campo (nombre, descripcion, unidades, dedicacion, proveedor_Campo) VALUES ('$nombre', '$descripcion', '$unidades', '$dedicacion', '$proveedor');");

    $sql = ("SELECT idMaterial_Campo FROM calabazanos.material_campo
        WHERE nombre='$nombre';");
    $query = mysqli_query($mysqli, $sql);
    $idProducto = 0;
    while ($arreglo = mysqli_fetch_array($query)) {
        $idProducto = $arreglo[0];
    }

    mysqli_query($mysqli, "INSERT INTO compras (unidades, coste, currelas_DNI, Material_campo_idMaterial_campo) VALUES ('$unidades', '$precio', '$dniUsuario', '$idProducto');");

    echo ' <script language="javascript">alert("Compra registrada!!");</script> ';

    echo "<script>location.href='compraMatCampoNuevo.php'</script>";
}
