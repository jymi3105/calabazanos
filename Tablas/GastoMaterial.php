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
    <title>Gastos del material</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Miranda Izcara">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body data-offset="40" background="../images/procesionaria.jpg" style="background-attachment: fixed">
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

        <?php

        include("../include/menu.php");

        ?>

        <!-- ======================================================================================================================== -->
        <div class="row">
            <div class="span12">
                <div class="caption">
                    <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                    <h2 class="titulo"> Administración del inventario del material de campo</h2>
                    <div class="well well-small">
                        <hr class="soft" />
                        <h4>Tabla de materiales de campo</h4>
                        <div class="row-fluid">
                            <?php

                            require("../connect_db.php");
                            $sql = ("SELECT material_campo.nombre,  pedidos.unidades, pedidos.provinciaDestino, pedidos.fechaPedido, currelas.usuario, material_campo.proveedor_Campo
                            FROM calabazanos.pedidos, calabazanos.material_campo, calabazanos.currelas
                            WHERE pedidos.Material_campo_idMaterial_campo=material_campo.idMaterial_campo AND pedidos.currelas_DNI=currelas.DNI;");

                            //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                            $query = mysqli_query($mysqli, $sql);

                            echo "<table border='1'; class='table table-hover';>";
                            echo "<tr class='warning'>";
                            echo "<td>Nombre</td>";
                            echo "<td>unidades</td>";
                            echo "<td>Provincia destino</td>";
                            echo "<td>fechaPedido</td>";
                            echo "<td>Nombre Trabajador</td>";
                            echo "<td>Proveedor del material</td>";
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
                                echo "<td>$arreglo[5]</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                            <div class="span8">
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer
      ================================================== -->
        <footer class="footer">

            <hr class="soften" />
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