<?php

	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.html");
	}if ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}if($_SESSION['rol'] == 4){
		header("Location:index.html");
	}
	elseif($_SESSION['rol'] ==2){
		header("Location:donador.php");
	}

	?>
    <?php 
    include 'global/conexion.php';
    include 'temp/cabecera.php';
    ?>	
    <?php
		extract($_GET['id']);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$email=$row[3];
                $passben=$row[6];
		    }

        
?>

		
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Perfil De Usuario</title>

</script>

<body>
    <h3 align="center">Perfil de Usuario</h3>

 
		
<div class="log" style="height: 600px;">
	<form action="ejecutaactualizar.php" method="post"; style="height: 700px"
			>
			<br>Usuario<br> 
			<input type="text" name="user" value="<?php echo $user?>">
			<br>Correo usuario<br> 
			<input type="text" name="email" value="<?php echo $email?>">
			
            <br>Password Beneficiario<br>
            <input type="text" name="passben" value="<?php echo $passben?>">
            <br>
			
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
</div>
		

		<div class="span8">
		
		</div>	
		</div>	
		<br/>
	</div>

  </body>
</html>