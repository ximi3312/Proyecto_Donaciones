<?php 

$conectar = new PDO('mysql:host=localhost;dbname=academ', 'root', '');
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$valor=2;
	$num= NULL;

	$orden = "INSERT INTO login (user, password , email, pasadmin, rol, passben) VALUES ('$nombre', '$contrasena', '$correo', '$num', '$valor', '$num')";
	
	$resultado = $conectar->query($orden);

	if ($resultado) {
		header("Location: admin.php");
		echo '<script>
				alert("Registro Exitoso");
				</script>';
	}else{

		echo "Error al Registrar";
	}
	require 'nuevo.php';

?>