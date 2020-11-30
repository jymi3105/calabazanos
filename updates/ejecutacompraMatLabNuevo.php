<?php

$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$unidades = $_POST['unidades'];
/*La provincia ira destinado al insert de la tabla de pedidos*/
$tipo = $_POST['tipo'];
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

if ($tipo == '0') {
    echo ' <script language="javascript">alert("Elije el tipo de material");</script> ';
    echo "<script>location.href='compraMatLabNuevo.php'</script>";
} else {
    require("../connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    /*Tengo que impedir que se incluyan productos ya existentes*/
    mysqli_query($mysqli, "INSERT INTO material_laboratorio (nombreLab, descripcionLab, unidades, proveedor, tipo) VALUES ('$nombre', '$descripcion', '$unidades', '$proveedor', '$tipo');");
                         //INSERT INTO material_laboratorio (nombreLab, descripcionLab, unidades, proveedor, tipo) VALUES ('Agar agar', 'bote de 200 gr ', '20', 'clinix', 'consumible');

                         
    $sql = ("SELECT idLab FROM calabazanos.material_laboratorio
        WHERE nombreLab='$nombre';");
    $query = mysqli_query($mysqli, $sql);
    $idProducto = 0;
    while ($arreglo = mysqli_fetch_array($query)) {
        $idProducto = $arreglo[0];
    }

    mysqli_query($mysqli, "INSERT INTO compras (unidades, coste, currelas_DNI, Material_laboratorio_idLab) VALUES ('$unidades', '$precio', '$dniUsuario', '$idProducto');");

    echo ' <script language="javascript">alert("Compra registrada!!");</script> ';

    echo "<script>location.href='compraMatLabNuevo.php'</script>";
}
