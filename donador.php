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
    include 'global/conexion.php';
    include 'temp/cabecera_donador.php';
    include 'global/configura.php';
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Beneficiarios</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ximena Blackmer">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

<body>
<div class="container">
<header class="header">
<div class="row">
</div>
</header>

<div class="row">
	<h1 class="span" style="color: #F39C12">Asociaciones</h1>
</div>
<br>
<br>
<div class="container">
	<div class="row">

		<?php 
         $sql = $pdo->prepare('SELECT * FROM login');
         $sql->execute();
         $listaBeneficiarios = $sql->fetchAll(PDO::FETCH_ASSOC);

        ?>
        
        <?php foreach ($listaBeneficiarios as $user) {?>
        <div class="span3">
	        <div class="thumbnail">	

	          <div class="caption">
	          <span><?php echo $user['user'];?></span>
	          <h5 class="card-title">$<?php echo $user['user'];?></h5>	
	          <form action="" method="post">

	          	
	          	<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($user['user'],COD,KEY);?>">
	          	<input type="hidden" name="correo" id="correo" value="<?php echo openssl_encrypt($user['email'],COD,KEY);?>">
	         

	          </form>
	          <br/>
	          </div>
	       </div>
	    </div>
	    
        <?php } ?>		
	</div>
</div>

</div><!-- /container -->
<script>
	$(function () {
  $('[data-toggle="popover"]').popover()
   });
</script>

</body>
</html>