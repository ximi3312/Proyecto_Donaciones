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
<body background= "images/fondo.jpg" style="background-attachment:fixed;">
<div style="text-align: center; background-color:#f5c26f; margin-left: 30%; margin-right: 30%; border-radius: 15px; margin-top: 12%;" >
		<form action="newregistro2.php" method="POST">
				<h5 style="color: white;">Registrate Beneficiario</h5>
				<br>
				<p2>Nombre</p2>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<br>
				<p2>Correo</p2>
				<br>
				<input type="email" name="correo" placeholder="usuario@gmail.com" required>
				<br>
				<p2>Numero</p2>
				<br>
				<input type= "text" name="numero"  placeholder="Ejem. 33-00-00-00-00"  />
				<br>
				<p2>Direccion</p2>
				<br>
				<input type="text" name="direccion" placeholder="Direccion"   />
				<br>
				<p2>Descripcion</p2>
				<br>
				<input type="text" name="descripcion" placeholder="Caracteristicas de la Asociación"  />
				<br>
				<p2>Contrase&ntilde;a</p2>
				<br>
				<input name="contrasena" type="password" id="contrasena" size="20" />
				<br>
				<p2>Rol</p2>
				<br>
				<input name="rol"   size="20" />
				<br>
				<input type="submit" name="Enviar">
			</form>
		</div>
</body>
		