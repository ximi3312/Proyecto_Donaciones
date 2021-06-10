<?php

	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}if ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}if($_SESSION['rol']==4) {
		header("Location:index.html");
    }
	elseif($_SESSION['rol'] ==3){
		header("Location:beneficiario.php");
	}
    
    
	?>
<?php 
    //include 'global/conexion.php';
    include 'temp/cabecera_donador.php'
?>
