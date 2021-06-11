<!DOCTYPE html>
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

 
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM beneficiario WHERE id=$id";
	
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
                $email=$row[2];
                $direccion=$row[3];
                $numero=$row[4];
                $descripcion=$row[5];
		    	$contrasena=$row[6];
                $rol=$row[7];
                
		    }



		?>
<div class="log" style="height: 600px;">
	<form action="ejecutaactualizar2.php" method="post"; style="height: 700px"
			>Id<br>
            <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
			<br>Usuario<br> 
			<input type="text" name="user" value="<?php echo $user?>">
            <br>Correo usuario<br> 
			<input type="text" name="email" value="<?php echo $email?>">
            <br>Dirección<br> 
			<input type="text" name="direccion" value="<?php echo $direccion?>">
            <br>Número<br> 
			<input type="text" name="numero" value="<?php echo $numero?>">
            <br>Descripcion<br> 
			<input type="text" name="descripcion" value="<?php echo $descripcion ?>">
			<br>Password usuario<br> 
			<input type="text" name="pass" value="<?php echo $contrasena?>">
            <br>Rol<br>
            <input type="text" name="rol" value="<?php echo $rol?>">
            
			
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