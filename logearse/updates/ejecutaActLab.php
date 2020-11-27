<?php

$producto = $_POST['producto'];
$usuario = $_POST['usuario'];
$unidades = $_POST['unidades'];

require("../connect_db.php");
$sql = ("SELECT unidades FROM calabazanos.material_laboratorio 
        WHERE nombreLab='$producto';");
$query = mysqli_query($mysqli, $sql);
$stock = 0;
while ($arreglo = mysqli_fetch_array($query)) {
    $stock = $arreglo[0];
}
if ($unidades > $stock) {
    echo ' <script language="javascript">alert("No hay tanto stock para ti. Pide.");</script> ';
    echo "<script>location.href='actualizaLab.php'</script>";
} else {
    require("../connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
    mysqli_query($mysqli, "UPDATE calabazanos.material_laboratorio SET unidades = unidades - '$unidades' WHERE (nombreLab = '$producto');");
    
    echo ' <script language="javascript">alert("Ya has sacado algo!!");</script> ';

    echo "<script>location.href='actualizaLab.php'</script>";
}
