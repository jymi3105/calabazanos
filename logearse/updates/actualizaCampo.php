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

                include("../include/menu.php");
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
                        
                            <li class=""><a href="admin.php">DATOS DEL SITIO WEB</a></li>

                        </ul>
                        <form action="#" class="navbar-search form-inline" style="margin-top:6px">

                        </form>
                        <ul class="nav pull-right">
                            <li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
                            <li><a href="../desconectar.php"> Cerrar Cesión </a></li>
                            <li><a href="../index2.php"> Volver a inicio </a></li>
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
                    <h2> Administración del inventario del material de campo</h2>
                    <div class="well well-small">
                        <hr class="soft" />
                        <h4>¿Que material quieres sacar?</h4>
                        <div class="row-fluid">
                            <form method="post" action="ejecutaActCampo.php">
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
                                /*$sql = ("SELECT nombreLab FROM material_laboratorio");*/
                                ?>
                                <input type="text" name="usuario" value="<?php echo $_SESSION['user']; ?>" readonly>
                                <p>¿Cuantas unidades vas a extraer?</p>
                                <input type="number" name="unidades" required placeholder="Unidades que vas a extraer.">
                                <P>¿A qué provincia irá destinado?</P>
                                <select name="provincia">
                                    <option value=0>Elige una opcion</option>
                                    <option value="AVILA">AVILA</option>
                                    <option value="BURGOS">BURGOS</option>
                                    <option value="PALENCIA">PALENCIA</option>
                                    <option value="LEON">LEON</option>
                                    <option value="SALAMANCA">SALAMANCA</option>
                                    <option value="SEGOVIA">SEGOVIA</option>
                                    <option value="SORIA">SORIA</option>
                                    <option value="VALLADOLID">VALLADOLID</option>
                                    <option value="ZAMORA">ZAMORA</option>
                                </select>

                                <br />

                                <input class="btn btn-primary" type="submit" value="Ejecutar">
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                require("ejecutaActCampo.php");
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