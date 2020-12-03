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
    <?php
    include("../include/miestilo.php");
    ?>
    </head>

<body data-offset="40" background="../images/laboratorioimg.jpg" style="background-attachment: fixed">
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
                    <h2 class="titulo"> Administración del inventario del material de laboratorio</h2>
                    <div class="well well-small">
                        <hr class="soft" />
                        <h4>¿Que material quieres sacar?</h4>
                        <div class="row-fluid">
                            <form method="post" action="ejecutaActLab.php">
                                <?php
                                require("../connect_db.php");
                                $sql2 = ("SELECT nombreLab FROM material_laboratorio");

                                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                                $query = mysqli_query($mysqli, $sql2);
                                echo '<select name="producto">';
                                echo "<option value=0>Elige una opcion</option>";
                                while ($arreglo = mysqli_fetch_array($query)) {
                                    echo "<option value='$arreglo[0]'>$arreglo[0]</option>";
                                }
                                echo '</select>';
                                $sql = ("SELECT nombreLab FROM material_laboratorio");
                                ?>
                                <input style="visibility: hidden;" type="text" name="usuario" value="<?php echo $_SESSION['user']; ?>">
                                <p>¿Cuantas unidades vas a extraer?</p>
                                <input type="number" name="unidades" required placeholder="Unidades que vas a extraer.">
                                <br />

                                <input class="btn btn-primary" type="submit" value="Ejecutar">
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                echo ' <script language="javascript">alert("Pues parece que si que hay stock");</script> ';
                                require("ejecutaActLab.php");
                            }
                            ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Footer
      ================================================== -->
      <?php
		include("../include/pie.php");
		?>
    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </style>
</body>

</html>