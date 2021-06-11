<?php 

$conectar = new PDO('mysql:host=localhost;dbname=academ', 'root', '');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$numero = $_POST['numero'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
<<<<<<< HEAD
$rol = $_POST['rol'];


	
	$orden = "INSERT INTO beneficiario (user , email, direccion, numero, descripcion, contrasena, rol) VALUES ('$nombre', '$correo', '$direccion', '$numero','$descripcion', '$contrasena', '$rol' )"; 
=======
$valor = 3;

	
	$orden = "INSERT INTO beneficiario (user , email, direccion, numero, descripcion, contrasena, rol) VALUES ('$nombre', '$correo', '$direccion', '$numero','$descripcion', '$contrasena', '$valor' )"; 
>>>>>>> 034fc1dc8edb40599dc186c77a738b46d6bb9704
	
	$resultado = $conectar->query($orden);

	if ($resultado) {
		header("Location: admin.php");
		echo '<script>
				alert("Registro Exitoso");
				</script>';
	}else{

		echo "Error al Registrar";
	}
	require 'admin.php';

?>