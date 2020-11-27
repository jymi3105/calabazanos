<?php

$producto = $_POST['producto'];
$usuario = $_POST['usuario'];
$unidades = $_POST['unidades'];
/*La provincia ira destinado al insert de la tabla de pedidos*/
$provincia=$_POST['provincia'];

require("../connect_db.php");
$sql = ("SELECT idMaterial_Campo FROM calabazanos.material_campo
        WHERE nombre='$producto';");
$query = mysqli_query($mysqli, $sql);
$idProducto = 0;
while ($arreglo = mysqli_fetch_array($query)) {
    $idProducto = $arreglo[0];
}




require("../connect_db.php");
$sql = ("SELECT unidades FROM calabazanos.material_campo
        WHERE nombre='$producto';");
$query = mysqli_query($mysqli, $sql);
$stock = 0;
while ($arreglo = mysqli_fetch_array($query)) {
    $stock = $arreglo[0];
}
if ($unidades > $stock) {
    echo ' <script language="javascript">alert("No hay tanto stock para ti. Pide.");</script> ';
    echo "<script>location.href='actualizaCampo.php'</script>";
} else {
    require("../connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    mysqli_query($mysqli, "UPDATE calabazanos.material_campo SET unidades = unidades - '$unidades' WHERE (nombre = '$producto');");
    mysqli_query($mysqli, "INSERT INTO calabazanos.pedidos (unidades, provinciaDestino, currelas_DNI, Material_campo_idMaterial_campo) VALUES ('$unidades', '$provincia', '2134', '$idProducto');");

    echo ' <script language="javascript">alert("Ya has sacado algo!!");</script> ';

    echo "<script>location.href='actualizaCampo.php'</script>";
}
