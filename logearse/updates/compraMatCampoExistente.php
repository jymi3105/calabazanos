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
                    <h2> Compra de material para el trabajo de campo</h2>
                    <div class="well well-small">
                        <hr class="soft" />
                        <h4>Completa el formulario</h4>
                        <div class="row-fluid">
                            <form method="post" action="ejecutacompraMatCampoExistente.php">

                                <input style="visibility: hidden;" type="text" name="usuario" value="<?php echo $_SESSION['user']; ?>">
                                <input style="visibility: hidden;" type="text" name="dniUsuario" value="<?php echo $_SESSION['dni']; ?>">
                                
                                <label>Nombre del material que vas a comprar: </label>
                                <?php
                                require("../connect_db.php");
                                $sql2 = ("SELECT nombre FROM calabazanos.material_campo");

                                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                                $query = mysqli_query($mysqli, $sql2);
                                echo '<select name="producto">';
                                echo "<option value=0>Elige una opcion</option>";
                                while ($arreglo = mysqli_fetch_array($query)) {
                                    echo "<option value='$arreglo[0]'>$arreglo[0]</option>";
                                }
                                echo '</select>';
                                ?>

                                <label>Unidades del material que vas a comprar: </label>
                                <input type="number" name="unidades" required placeholder="Unidades que vas a comprar.">

                                <label>Precio total: </label>
                                <input type="text" name="precio" required placeholder="Precio total">

                                <br />

                                <input class="btn btn-primary" type="submit" value="Ejecutar">
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                require("ejecutacompraMatCampoExistente.php");
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