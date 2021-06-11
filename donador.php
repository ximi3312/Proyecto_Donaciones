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
    include 'global/configura.php';
    include 'global/conexion.php';
    include 'temp/cabecera_donador.php';
    
    
    ?>
    <br>
		<?php if($mensaje!="") {?>
		<div class="alert alert-success">
		<?php echo ($mensaje); ?>
			
			<a href="mostrarcarrito.php" class="badge badge-success">Ver Carrito</a>
		</div>
		
		<?php }?>
	
		<div class="row">

	<?php
		$sentencia=$pdo->prepare("SELECT * FROM beneficiario WHERE rol='3'");
		$sentencia->execute();
		$listaProd=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		//print_r($listaProd);
	?>
	<?php
	foreach($listaProd as $producto){ ?>
		<div class="col-12">
			<div class="card text-dark bg-warning mb-3" >
				<div class="card-body">
				<h5 class="card-title"><?php echo $producto['user'];?></h5>
                <h6 class="card-subtitle mb-2 ">Domicilio:</h6>
				<h7 class="card-text"> <?php echo $producto['direccion'];?></h7>
                <h6 class="card-text"> Telefono:</h6>
                <h7 class="card-text"> <?php echo $producto['numero'];?></h7>
                <h6 class="card-text"> Correo:</h6>
                <h7 class="card-text"> <?php echo $producto['email'];?></h7>
                <h6 class="card-text"> Descripcion de la Asociación:</h6>
                <h7 class="card-text"> <?php echo $producto['descripcion'];?></h7>
					
					<br>

					<form action="" method="post">
						<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
						<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['user'],COD,KEY);?>">
						<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['direccion'],COD,KEY);?>">
						<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
					
					</form>

				</div>	
			</div>
		</div>
					
	
	<?php }
	?>
</div>
<script>
	$(function(){
		$('[data-toggle="popover"]').popover()
	}
	);
</script>

<?php 
include 'temp/pie.php';
?>