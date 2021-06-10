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
				<h5>Registra Beneficiario</h5>
				<p2>Nombre</p2>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<br>
				<p2>Usuario</p2>
				<input type="email" name="correo" placeholder="usuario@gmail.com" required>
				<br>
				<p2>Contrase&ntilde;a</p2>
				<input name="contrasena" type="password" id="contrasena" size="20" />
				<br>
				<br>
				<input type="submit" name="Enviar">
			</form>
		</div>