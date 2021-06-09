<?php 

$conectar = new PDO('mysql:host=localhost;dbname=academ', 'root', '');
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$valor=4;
	$num= NULL;

	$orden = "INSERT INTO login (user, password , email, pasadmin, rol, passben) VALUES ('$nombre', '$num', '$correo', '$num', '$valor', '$contrasena' )";
	
	$resultado = $conectar->query($orden);

	if ($resultado) {
		header("Location: index.php");
		echo '<script>
				alert("Registro Exitoso");
				</script>';
	}else{

		echo "Error al Registrar";
	}
	require 'registrabeneficiario.html';

?>