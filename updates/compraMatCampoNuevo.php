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
    <title>Inventario del centro de sanidad forestal de Calabazanos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Miranda Izcara">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <?php
    include("../include/miestilo.php");
    ?>
    </head>

<body data-offset="40" background="../images/Procesionaria.jpg" style="background-attachment: fixed">
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
                    <h2 class="titulo"> Compra de material nuevo para el trabajo de campo</h2>
                    <div class="well well-small">
                        <hr class="soft" />
                        <h4>Completa el formulario</h4>
                        <div class="row-fluid">
                            <form method="post" action="ejecutacompraMatCampoNuevo.php">

                                <label>Nombre del material que vas a comprar: </label>
                                <input type="text" name="nombre" required placeholder="Nombre del producto.">

                                <label>Descripcion del material que vas a comprar: </label>
                                <input type="text" name="descripcion" required placeholder="descripcion del producto">

                                <label>Unidades del material que vas a comprar: </label>
                                <input type="number" name="unidades" required placeholder="Unidades que vas a comprar.">

                                <label>Precio total: </label>
                                <input type="text" name="precio" required placeholder="Precio total">

                                <label>Dedicacion del material que vas a comprar: </label>
                                <select name="dedicacion">
                                    <option value="0">Elige una opción</option>
                                    <option value="Campo">Campo</option>
                                    <option value="Trampeo">Trampeo</option>
                                    <option value="Muestreo">Muestreo</option>
                                    <option value="Viveros">Viveros</option>
                                    <option value="Tratamientos">Tratamientos</option>
                                </select>

                                <label>Proveedor del material</label>
                                <input type="text" name="proveedor" required placeholder="Proveedor.">

                                <br />
                                <input style="visibility: hidden;" type="text" name="usuario" value="<?php echo $_SESSION['user']; ?>">
                                <input class="btn btn-primary" type="submit" value="Ejecutar">
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                require("ejecutacompraMatCampoNuevo.php");
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer
      ================================================== -->
        <hr class="soften" />
        <footer class="footer">

            <hr class="soften" />
            <p>&copy; Copyright Jorge Miranda Izcara<br /><br /></p>
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