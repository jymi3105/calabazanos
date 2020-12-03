<!DOCTYPE html>

<div class="navbar ">
  <div class="navbar-inner">
	<div class="container">
	  <div class="menuP nav-collapse">
		<ul class="nav">
			<li><a href="../index2.php">Principal</a></li>
	
		</ul>
	
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="../desconectar.php"> Cerrar sesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>