<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}if ($_SESSION['rol']==2) {
	header("Location:donador.php");
}if($_SESSION['rol'] == 4){
    header("Location:index.html");
}elseif($_SESSION['rol'] ==3){
    header("Location:beneficiario.php");
}

?>
<?php
	include 'temp/cabeceraadmin.php';
	?>

		<div class="log" style="margin-left: 250px;">
		<form action="newregistro2.php" method="POST">
				<h5>Registrate Beneficiario</h5>
				<p2>Nombre</p2>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<br>
				<p2>Correo</p2>
				<input type="email" name="correo" placeholder="usuario@gmail.com" required>
				<br>
				<p2>Numero</p2>
				<input type= "text" name="numero"   size="20" />
				<br>
				<p2>Direccion</p2>
				<input type="text" name="direccion"  size="20" />
				<br>
				<p2>Descripcion</p2>
				<input type="text" name="descripcion"  />
				<br>
				<p2>Contrase&ntilde;a</p2>
				<input name="contrasena" type="contrasena" id="contrasena" size="20" />
				<br>
				<input type="submit" name="Enviar">
			</form>
		</div>