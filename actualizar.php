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

		$sql="SELECT * FROM login WHERE id=$id";
	
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
                $rol=$row[5];
                $passben=$row[6];
		    }



		?>
<div class="log" style="height: 600px;">
	<form action="ejecutaactualizar.php" method="post"; style="height: 700px"
			>Id<br>
            <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
			<br>Usuario<br> 
			<input type="text" name="user" value="<?php echo $user?>">
			<br>Password usuario<br> 
			<input type="text" name="pass" value="<?php echo $pass?>">
			<br>Correo usuario<br> 
			<input type="text" name="email" value="<?php echo $email?>">
			<br>Pssword administrador<br> 
            <input type="text" name="pasadmin" value="<?php echo $pasadmin?>">
            <br>Rol<br>
            <input type="text" name="rol" value="<?php echo $rol?>">
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