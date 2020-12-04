<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:../index.php");
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Compra del material</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Miranda Izcara">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <?php
    include("../include/miestilo.php");
    ?>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body data-offset="40" background="../images/monedas.jpg" style="background-attachment: fixed">
    <div class="container">
        <header class="header">
            <div class="row">
                <?php
                include("../include/cabecera.php");
                ?>
            </div>
        </header>

        <!-- Navbar
    ================================================== -->

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class=""><a href="../administrador/admin.php">ADMINISTRADOR DEL SITIO</a></li>


                        </ul>
                        <form class="navbar-search form-inline" style="margin-top:6px">

                        </form>
                        <ul class="nav pull-right">
                            <li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
                            <li><a href="../desconectar.php"> Cerrar Cesión </a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div>

        <!-- ======================================================================================================================== -->
        <div class="row">
            <div class="span12">
                <div class="caption">
                    <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                    <h2 class="titulo"> Listado de la compra de material</h2>
                    <div class="well well-small animacion">
                        <hr class="soft" />
                        <h4 class="titulo">Listado de las compras</h4>
                        <div class="row-fluid">
                            <?php

                            require("../connect_db.php");
                            $sql = ("select material_campo.nombre, compras.fechaCompra, compras.coste, compras.unidades,
                            concat(currelas.nombre, ' ', currelas.apellidos), compras.idcompras
                            from compras, currelas, material_campo
                            where currelas.DNI=compras.currelas_DNI 
                            and compras.Material_campo_idMaterial_campo=material_campo.idMaterial_campo;");
                            //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                            $query = mysqli_query($mysqli, $sql);

                            echo "<table border='1'; class='table table-hover';>";
                            echo "<tr class='warning'>";
                            echo "<td>Nombre Producto</td>";
                            echo "<td>Fecha de Compra</td>";
                            echo "<td>Coste</td>";
                            echo "<td>Unidades</td>";
                            echo "<td>Nombre del comprador</td>";
                            echo "<td>Destino de la compra</td>";
                            echo "<td>Actualizar</td>";
                            echo "<td>Borrar</td>";
                            echo "</tr>";
                            ?>

                            <?php
                            while ($arreglo = mysqli_fetch_array($query)) {
                                echo "<tr class='success'>";
                                echo "<td>$arreglo[0]</td>";
                                echo "<td>$arreglo[1]</td>";
                                echo "<td>$arreglo[2]</td>";
                                echo "<td>$arreglo[3]</td>";
                                echo "<td>$arreglo[4]</td>";
                                echo "<td>Campo</td>";
                                echo "<td><a href='../Administrador/actualizarTablaGastos.php?id=$arreglo[5]'><img src='../images/actualizar.gif' class='img-rounded'></td>";
                                echo "<td><a href='compraMaterial.php?id=$arreglo[5]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";

                                echo "</tr>";
                            }
                             #Con este metodo saco todas las variables
                            extract($_GET);
                            if (@$idborrar == 2) {

                                $sqlborrar = "DELETE FROM compras WHERE idcompras=$id";
                                $resborrar = mysqli_query($mysqli, $sqlborrar);
                            }

                            $sql = "select material_laboratorio.nombreLab, compras.fechaCompra, compras.coste, compras.unidades,
                            concat(currelas.nombre, ' ', currelas.apellidos), compras.idcompras
                            from compras, currelas, material_laboratorio
                            where currelas.DNI=compras.currelas_DNI 
                            and compras.Material_laboratorio_idLab=material_laboratorio.idLab;";
                            $query = mysqli_query($mysqli, $sql);

                            while ($arreglo = mysqli_fetch_array($query)) {
                                echo "<tr class='success'>";
                                echo "<td>$arreglo[0]</td>";
                                echo "<td>$arreglo[1]</td>";
                                echo "<td>$arreglo[2]</td>";
                                echo "<td>$arreglo[3]</td>";
                                echo "<td>$arreglo[4]</td>";
                                echo "<td>Laboratorio</td>";
                                echo "<td><a href='../Administrador/actualizarTablaGastos.php?id=$arreglo[5]'><img src='../images/actualizar.gif' class='img-rounded'></td>";
                                echo "<td><a href='compraMaterial.php?id=$arreglo[5]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";
                                echo "</tr>";
                            }
                            echo "</table>";

                             #Con este metodo saco todas las variables
                             extract($_GET);
                             if (@$idborrar == 2) {
 
                                 $sqlborrar = "DELETE FROM compras WHERE idcompras=$id";
                                 $resborrar = mysqli_query($mysqli, $sqlborrar);
                                 echo '<script>alert("COMPRA ELIMINADA")</script> ';
 
                                 echo "<script>location.href='compraMaterial.php'</script>";
                             }
                            ?>

                        </div>
                        <br />
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer
      ================================================== -->
        <hr class="soften" />
        <footer class="footer">

            <p>&copy; Copyright Jorge Miranda <br /><br /></p>
        </footer>
    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </style>
</body>

</html>