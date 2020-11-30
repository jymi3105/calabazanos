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
    <meta name="description" content="">
    <meta name="author" content="Jorge Miranda Izcara">

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body data-offset="40" background="../images/fondotot.jpg" style="background-attachment: fixed">
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

                            <li><a href="../index2.php"> Volver a inicio </a></li>

                        </ul>

                        <ul class="nav pull-right">
                            <li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong></a></li>
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
                    <h2> Compra de nuevo material para el trabajo de laboratorio</h2>
                    <div class="well well-small">
                        <hr class="soft" />
                        <h4>Completa el formulario</h4>
                        <div class="row-fluid">
                            <form method="post" action="ejecutacompraMatLabNuevo.php">

                                <input style="visibility: hidden;" type="text" name="usuario" value="<?php echo $_SESSION['user']; ?>">
                                <label>Nombre del material que vas a comprar: </label>
                                <input type="text" name="nombre" required placeholder="Nombre del producto.">

                                <label>Descripcion del material que vas a comprar: </label>
                                <input type="text" name="descripcion" required placeholder="descripcion del producto">

                                <label>Unidades del material que vas a comprar: </label>
                                <input type="number" name="unidades" required placeholder="Unidades que vas a comprar.">

                                <label>Precio total: </label>
                                <input type="text" name="precio" required placeholder="Precio total">

                                <label>Proveedor del material</label>
                                <input type="text" name="proveedor" required placeholder="Proveedor.">

                                <label>Dedicacion del material que vas a comprar: </label>
                                <select name="tipo">
                                    <option value="0">Elige una opción</option>
                                    <option value="Durable">Durable</option>
                                    <option value="Consumible">Consumible</option>
                                </select>

                                <br />
                                <input style="visibility: hidden;" type="text" name="usuario" value="<?php echo $_SESSION['user']; ?>">
                                <input class="btn btn-primary" type="submit" value="Ejecutar">

                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                require("ejecutacompraMatLabNuevo.php");
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